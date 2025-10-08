<form method="post">
  Username: <input type="text" name="user"><br>
  Password: <input type="password" name="pass"><br>
  <input type="submit" value="Login">
</form>

<?php
if ($_POST) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    if ($user == "admin" && $pass == "1234")
        echo "Login successful!";
    else
        echo "Invalid username or password.";
}
?>
