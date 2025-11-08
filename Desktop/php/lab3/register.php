<!DOCTYPE html>
<html>
<head>
    <title>Add User</title>
</head>
<body>
    
    <h2>Add User</h2>
    <form action="save_user.php" method="POST" enctype="multipart/form-data">
        Name: <input type="text" name="name" required><br><br>
        Email: <input type="text" name="email" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        Confirm Password: <input type="password" name="confirm_password" required><br><br>

        Room No:
        <select name="room_no" required>
            <option value="">Select Room No</option>
            <option value="Application1">Application1</option>
            <option value="Application2">Application2</option>
            <option value="Cloud">Cloud</option>
        </select><br><br>

        Ext: <input type="text" name="ext"><br><br>

        Profile Picture: <input type="file" name="profile" accept="image/*" required><br><br>

        <input type="submit" value="Save">
        <input type="reset" value="Reset">
    </form><br><br>
    <a href="login.php">if you have account? Login</a>
</body>
</html>
