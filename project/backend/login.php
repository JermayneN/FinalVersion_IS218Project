<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

include 'Database.php';
include 'memberlist.php';

session_start();

$action = filter_input(INPUT_POST, 'action');

switch($action) {

    case 'login':
        login();
        break;
    default:
        include '../login.php';
        break;
}
function login() {

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

    if($data = User::login($email, $password)) {
        $user = new User();
        $user->setFirstName($data['fname']);
        $user->setLastName($data['lname']);
        $user->setEmail($data['email']);
        $user->setPhone($data['phone']);
        $user->setGender($data['gender']);
        $user->setBirthday($data['birthday']);
        $user->setSession();
        return header('Location: dashboard');
    } else {
        $status = ['success' => false, 'msg' => 'Your Email/Password failed'];
        return include '../login.php';
    }
}
?>