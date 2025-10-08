<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    if ($user == "admin" && $pass == "1234") {
        $_SESSION['user'] = $user;
        header("Location: welcome.php");
    } else {
        echo "Invalid login.";
    }
}
?>
<form method="post">
  Username: <input type="text" name="user"><br>
  Password: <input type="password" name="pass"><br>
  <input type="submit" value="Login">
</form>
