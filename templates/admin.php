<?php include ("sessions-users/session_admin.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <title>admin</title>
    <meta charset="UTF-8">
  </head>
<body>
Welcome: <?php echo $_SESSION["user"]; ?> | <a href="logout.php">logout</a>
<h1>admin template</h1>
</body>
</html>