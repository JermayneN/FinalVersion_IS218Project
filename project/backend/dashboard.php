<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
date_default_timezone_set('America/New_York');
session_start();

if(!isset($_SESSION['email'])) {
    header('Location: ../login');
}
include 'Database.php';
include 'memberlist.php'; //list of memebers backend
include 'todolist.php'; //todolist backend
$action = filter_input(INPUT_POST, 'action');
$status = null;
$edit_id = null;
switch($action) {
    case 'add':
        $status = add();
        break;
    case 'set_edit_todo':
        $edit_id = set_edit_todo();
        break;
    case 'edit':
        $status = edit();
        break;
    case 'delete':
        $status = delete();
        break;
}

show_main($status, $edit_id);
function add() {
    $todo = new Todo();
    $todo->setUserId($_SESSION['id']);
    $todo->setTitle(filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS));
    $todo->setCompleted(0);
    $todo->setUserEmail($_SESSION['email']);
    $todo->setDueDate(filter_input(INPUT_POST, 'due', FILTER_SANITIZE_SPECIAL_CHARS));
    return $todo->create();
}

function delete() {
    $id = filter_input(INPUT_POST, 'todo-id', FILTER_VALIDATE_INT);
    return Todo::deleteTodoById($id);
}

function setlist() {
    return filter_input(INPUT_POST, 'todo-id', FILTER_VALIDATE_INT);
}

function edit() {
    $id = filter_input(INPUT_POST, 'todo-id', FILTER_VALIDATE_INT);
    $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS);
    $due_date = filter_input(INPUT_POST, 'due', FILTER_SANITIZE_SPECIAL_CHARS);
    return Todo::edit($id, $title, $due_date);
}

function show_dashboard($status = null, $edit_id = null) {
    $todos = Todo::getTodosByUserId($_SESSION['id']);
    include '../dashboard.php';
}
 ?>