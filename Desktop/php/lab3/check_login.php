<?php
session_start();
$email = $_POST['email'];
$password = $_POST['password'];
$users = file("users.txt");
$found = false;

foreach($users as $user){
    list($name,$userEmail,$userPass,$room,$ext,$pic) = explode(",",trim($user));
    if($email == $userEmail && $password == $userPass){
        $_SESSION['name']=$name;
        $_SESSION['email']=$email;
        $_SESSION['pic']=$pic;
        $found = true;
        break;
    }

}

if($found){
    header("Location: welcome.php");
    exit();
} else{
    echo "Invalid login";
}