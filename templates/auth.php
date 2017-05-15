<?php include ("sessions-users/session_user.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <title>auth</title>
    <meta charset="UTF-8">
  </head>
<body>
Welcome: <?php echo $_SESSION["user"]; ?> | <a href="logout.php">logout</a>
<h1>User template</h1>
</body>
</html>