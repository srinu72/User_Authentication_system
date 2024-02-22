<?php 
function login($username, $password) {
    include('db.php');
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["name"];
        $password = $_POST["password"];

        // Fetch the hashed password from the database
        $stmt = $conn->prepare("SELECT password FROM users WHERE name = ?");
    if ($stmt === false) {
        die("Error in prepare statement: " . $conn->error);
    }

        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->bind_result($hash_pass);
        $stmt->fetch();
        $stmt->close();

        // Verify the password
        if (password_verify($password, $hash_pass)) {
            $_SESSION["username"] = $username;
            echo "login successful";
            header("Location: /Problemsolving/Hashing Password/dashboard.php");
            exit();
        } else {
            // Password is incorrect
            echo "Invalid username or password";
        }
    }
}

function signup($username, $password) {
    session_start();
    $sname = "localhost";
    $uname = "root";
    $password = "sri@123###12";
    $db_name = "ua";
    $conn = mysqli_connect($sname, $uname, $password, $db_name);
    if (!$conn) {
        echo "Connection failed!";
        exit();
    }

    $user=$_POST['name'] ;
    $mail=$_POST['email'] ;
    $password=$_POST['password'] ;
    global $hash_pass;
    $hash_pass=password_hash($password,PASSWORD_DEFAULT);
    $sql="INSERT INTO users (name,mail,password) VALUES ('$user', '$mail', '$hash_pass')";
    if (mysqli_query($conn, $sql)) {
        $_SESSION["mail"] = $mail;
        echo "<script>alert('New record has been added successfully !')</script>";
        header("Location:/Problemsolving/Hashing Password/index.php");
    
    } 
    else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
}


?>