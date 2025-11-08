<?php
if($_SERVER['REQUEST_METHOD']== 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $room_no = $_POST['room_no'];
    $ext = $_POST['ext'];

    // validation
    
    if(!preg_match("/^[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/",$email)){
        die("Invalid email format");
    }
    if($password !== $confirm_password){
        die("passwords not match");
    }
    if(strlen($password) !== 8){
         die("Password must be exactly 8 characters.");
    }
     if (!preg_match("/^[a-z0-9_]+$/", $password)) {
        die("Password must contain only lowercase letters, digits, or underscores.");
    }
     if (preg_match("/[A-Z]/", $password)) {
        die("Password must not contain capital letters.");
    }
    // image upload
    $target_dir = "uploads/";
    if(!is_dir($target_dir)){
        mkdir($target_dir);
    }
    $file_name = basename($_FILES['profile']['name']);
    $target_file = $target_dir . $file_name;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
   
   $check = getimagesize($_FILES['profile']['tmp_name']);
    if($check === false){
        die("file is not an imgae");
    }
    move_uploaded_file($_FILES['profile']['tmp_name'],$target_file);
    $data = "$name,$email,$password,$room_no,$ext,$target_file\n";
    file_put_contents("users.txt",$data,FILE_APPEND);
     echo "User added successfully! <a href='login.php'>Go to login</a>";

}

?>