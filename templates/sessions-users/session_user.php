<?php
  session_start();
  if (!$_SESSION["autenticated_user"]) {
    header("Location: logout.php");
  }
?>