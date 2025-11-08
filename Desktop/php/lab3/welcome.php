<?php

session_start();
if(!isset($_SESSION['name'])){
    header("Location: login.php");
    exit();
}

?>
<?php include("nav.php") ?>
<h1>welcome <?php echo $_SESSION['name'] ?> </h1>
<img src="<?php echo $_SESSION['pic'] ?>" width="200px">
<a href="logout.php">Logout</a>