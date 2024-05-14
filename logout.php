<?php
require_once('head.php');
session_destroy();
header("Location: login.php");
exit;
?>