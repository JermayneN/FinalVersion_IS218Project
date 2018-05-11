<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

session_start();

include 'Database.php';  //backend
include 'memberlist.php'; //backend
$action = filter_input(INPUT_POST, 'action');

switch($action) {

    case 'register':
        register();
        break;
    default:
        include '../register.php';
        break;
}
function register() {

    $first_name = filter_input(INPUT_POST, 'first-name', FILTER_SANITIZE_SPECIAL_CHARS);
    $last_name = filter_input(INPUT_POST, 'last-name', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_VALIDATE_INT);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
    $gender = filter_input(INPUT_POST, 'gender', FILTER_SANITIZE_SPECIAL_CHARS);
    $birthday = filter_input(INPUT_POST, 'birthday', FILTER_SANITIZE_SPECIAL_CHARS);
    if(user::getUserByEmail($email)) {
        $status = ['success' => false, 'msg' => "You are already in the system $email"];
        return include('../register.php');
    }
    
//makes a new user and sends all their info
    $user = new user();
    $user->setFirstName($first_name);
    $user->setLastName($last_name);
    $user->setEmail($email);
    $user->setPassword($password);
    $user->setPhone($phone);
    $user->setGender($gender);
    $user->setBirthday($birthday);
    
    
    $register = $user->register();
                                      
    if($reg['success']) {
        $user->setSession();
        header('Location: ../dashboard');   
    } else {
        $error = $register['msg'];
        include '../views/register.php';
    }
}
?>