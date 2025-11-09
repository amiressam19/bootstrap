<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration</title>
</head>
<body>
        <form action="save.php" method="POST">
      First Name <input type="text" name="fname"> <br><br>
      Last Name <input type="text" name="lname"> <br><br>
      Address <textarea name="address"></textarea> <br><br>
      Country <select name="country">
        <option value="">Select Country</option>
        <option value="Egypt">Egypt</option>
        <option value="KSA">KSA</option>
        <option value="UAE">UAE</option>
      </select> <br><br>
      Gender 
      Male<input type="radio" name="gender" value="male">
      Female<input type="radio" name="gender" value="female"> <br><br>
      Skills 
    Php <input type="checkbox" name="skills[]" value="php">
     Js <input type="checkbox" name="skills[]" value="js"><br><br>
      Mysql <input type="checkbox" name="skills[]" value="mysql">
       PostgreeSql <input type="checkbox" name="skills[]" value="postgree"><br><br>
        Email <input type="email" name="email" email> <br><br>
        Password <input type="password" name="password"> <br><br>
        Department <input type="text" name="department" value="open source" readonly><br><br>
        <input type="reset" value="Reset">
        <input type="submit" value="Submit">



        </form><br>
        <a href="customers.php">Show All Customers</a>
</body>
</html>