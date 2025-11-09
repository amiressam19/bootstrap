<?php
$file = "customers.txt";
if(file_exists($file)){
$lines = file($file,FILE_IGNORE_NEW_LINES);
}else{
    $lines = [];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Action</th>
            </tr>
        </thead>
        <!-- tbody -->
         <tbody>
            <?php
             if (empty($lines)) {
                echo "
                <tr>
                    <td colspan='6' style='text-align:center; color:red; font-weight:bold;'>
                        No customers found!
                    </td>
                </tr>";
            } else{

            
    foreach($lines as $index => $line){
        $data = explode(',' , $line);
    
            ?>
            <tr>
                <td><?php echo $index + 1 ?></td>
                <td><?php echo $data[0] ?></td>
                <td><?php echo $data[1] ?></td>
                <td><?php echo $data[2] ?></td>
                <td><?php echo $data[3] ?></td>
                <td>
                    <a style="color:red" href="delete.php?id=<?php echo $index ?>">Delete</a>
                </td>
            </tr>
            
            <?php }}; ?>
         </tbody>
    </table>
    
</body>
</html>
