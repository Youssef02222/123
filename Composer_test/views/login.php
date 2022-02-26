<?php
echo "login page<br>";



?>

<html>
<body>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>">
    <input type="text" name="username" placeholder="username..">
    <br>
    <input type="password" name="password" placeholder="pass.." >
    <br>
    <input type="submit" value="submit" name="send">

</form>

</body>
</html>
