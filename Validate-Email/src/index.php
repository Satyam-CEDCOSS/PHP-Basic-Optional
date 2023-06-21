<form action="#" method="get">
    <label for="email">E-mail: </label>
    <input type="text" name="email" placeholder="Email">
    <input type="submit" value="Check">
</form>

<?php
$email = $_GET['email'];
if (isset($email)){
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "<p>True</p>";
    }
    else{
      echo "<p>Invalid</p>";
    }
}
?>
