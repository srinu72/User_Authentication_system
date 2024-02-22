<?php
include('db.php');
session_start();
?>
<html>
    <head>
        <title>login</title>
    </head>
<body>
    <form action="login_auth.php" method="post" >
        Name :<input type="text" name="name"><br>
        password:<input type="password" name="password"><br>
        <button type="submit">login</button><br>
        <a href='\Problemsolving\Hashing Password\signup.php'>Signup</a>
    </form>
</body>
</html>
