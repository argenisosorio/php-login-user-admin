<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>
    <meta charset="UTF-8">
  </head>
<body>
<form name="autentication" action="control.php" method="post">
  <?php
    error_reporting(E_ALL ^ E_NOTICE);
    if ($_GET["error"]=="error-login") {
    }
    else {
      echo "";
    }
  ?>
  <p />
  Username: <input type="text" name="user"> <p />
  Password: <input type="password" name="pass"> <p />
  ¿Is admin?:
  <select name="admin">
    <option value="y">Yes</option>
    <option value="n">No</option>
  </select>
  <p />
  <input type="submit" name="login" value="Login">
  <input type="reset" name="reset" value="Reset">
</form>
<p />
<a href="user_password.txt">¿Forget the password?</a>
</body>
</html>