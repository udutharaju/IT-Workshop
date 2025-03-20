<?php
include("connct.php");

session.start();
session.unset();
session.destroy();

header('location:login.php');
?>