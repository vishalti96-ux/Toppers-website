<?php
session_start();

session_unset();
session_destroy();

header("location: officelogin.php");
exit;
?>
