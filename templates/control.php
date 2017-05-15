<?php
if ($_POST["user"]=="user" && $_POST["pass"]=="123" && $_POST["admin"]=="n") {
  session_start();
  $_SESSION["autenticated_user"] = true;
  $_SESSION["user"] = $_POST["user"];
  header("Location: auth.php");
}
else {
  if ($_POST["user"]=="user" && $_POST["pass"]=="123" && $_POST["admin"]=="y") {
    session_start();
    $_SESSION["autenticated_admin"] = true;
    $_SESSION["user"] = $_POST["user"];
    header("Location: admin.php");
  }
  else {
    header("Location: index.php?=error_login");
  }
}
?>