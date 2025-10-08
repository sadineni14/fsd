<form method="post">
  Enter DOB: <input type="date" name="dob">
  <input type="submit" value="Calculate">
</form>

<?php
if (isset($_POST['dob'])) {
    $dob = new DateTime($_POST['dob']);
    $today = new DateTime();
    $age = $today->diff($dob);
    echo "You are " . $age->y . " years, " . $age->m . " months and " . $age->d . " days old.";
}
?>
