<?php
$file = "customers.txt";

if(isset($_GET['id'])){
    $id = (int) $_GET['id'];
    if(file_exists($file)){
        $lines = file($file,FILE_IGNORE_NEW_LINES);
        if(isset($lines[$id])){
            unset($lines[$id]);
            file_put_contents($file,implode("\n",$lines) . "\n");
             echo "<h3 style='color:green;'>Customer deleted successfully!</h3>";
        } else{
            echo "<p style='color:red;'>Invalid ID!</p>";
        }
    }
}
echo "<a href='customers.php'>View Customers</a>";
