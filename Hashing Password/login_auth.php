
<?php 
    include('LS.php');
    $username = $_POST["name"];
    $password = $_POST["password"];
    login($username, $password);

?>