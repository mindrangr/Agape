<?php


  session_start();
  setcookie("agapeGUID", False, 0, "/"); // 86400 = 1 day
  header("location:home");

?>