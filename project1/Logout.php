<?php
include("connection.php");

session.start();
session.unset();
session.destroy();

header('location:Login.php');
?>
