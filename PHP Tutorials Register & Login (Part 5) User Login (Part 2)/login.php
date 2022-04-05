<?php
include 'core/init.php';

if(empty($_POST) === false){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(empty($username) === true || empty($password) === true){
        $errors[] = 'You need to enter username and password';
    } else if ( user_exists($username) != 1){
        $errors[] = 'We can not find the username. Have you registered?';
    }else if(user_active($username) == 0){
        $errors[] = 'You have not activated your account';
    }else{
        $login = login($username, $password);
        if($login === false){
            $errors[] = 'That username or password combination is incorrect';
        }else{

        }
    }
    print_r($errors);
}
?>