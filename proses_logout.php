<?php
session_start();
session_unset();
session_destroy();
echo "logout successful";
header("location:login.php");
 ?>
