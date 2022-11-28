<?php
session_start();
unset($_SESSION["email"]);
unset($_SESSION["fName"]);
header("Location: ../../../index.php?msg");
?>