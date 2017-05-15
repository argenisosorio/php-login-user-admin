<?php
  session_start();
  if (!$_SESSION["autenticated_admin"]) {
    header("Location: logout.php");
  }
?>