<?php
if($_SERVER['REQUEST_METHOD']==='POST'){
    $fname = trim($_POST['fname']);
    $lname = trim($_POST['lname']);
    $email = trim($_POST['email']);
    $gender = isset($_POST['gender'])?$_POST['gender']:"";
    $errors = [];

    // validation
    if(empty($fname)) $errors[]= "First name is required";
    if(empty($lname)) $errors[]= "Last name is required";
    if(empty($email)) {

     $errors[]= "Email is required";
    } elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errors[] = "Invalid email format";
    }
    if(empty($gender)) $errors[]= "Gender is required";

    if(!empty($errors)){
echo "<p style='color:red'>please fix the errors</p>";
echo "<ul>";
foreach($errors as $error) echo "<li>$error</li>";
echo "</ul>";
echo "<a href='registration.php'>Go back</a>";
exit;
    }

    // save the data in the file
    $data = "$fname,$lname,$email,$gender\n";
    
    file_put_contents("customers.txt",$data,FILE_APPEND);
     echo "<h3 style='color:green;'>Customer saved successfully!</h3>";
    echo "<a href='customers.php'>View Customers</a>";
}

?>