<?php
if (isset($_COOKIE['visits'])) {
    $visits = $_COOKIE['visits'] + 1;
} else {
    $visits = 1;
}
setcookie('visits', $visits, time() + (86400 * 30));
echo "You have visited this page $visits times.";
?>
