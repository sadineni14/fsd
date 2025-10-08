<form method="post">
  <input type="number" name="num1" required>
  <input type="number" name="num2" required>
  <select name="op">
    <option value="+">Add</option>
    <option value="-">Subtract</option>
    <option value="*">Multiply</option>
    <option value="/">Divide</option>
  </select>
  <input type="submit" name="submit" value="Calculate">
</form>

<?php
if (isset($_POST['submit'])) {
    $a = $_POST['num1'];
    $b = $_POST['num2'];
    $op = $_POST['op'];

    switch ($op) {
        case '+': echo "Result: " . ($a + $b); break;
        case '-': echo "Result: " . ($a - $b); break;
        case '*': echo "Result: " . ($a * $b); break;
        case '/': echo "Result: " . ($a / $b); break;
    }
}
?>
