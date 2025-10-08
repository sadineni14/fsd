<?php
$file = fopen("newfile.txt", "w");
fwrite($file, "This is a new file created using PHP.");
fclose($file);
echo "File written successfully.";
?>
