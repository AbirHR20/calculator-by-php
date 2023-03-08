<?php

session_start();

$num1 = $_POST["num1"];
$num2 = $_POST["num2"];

$result = $num1 + $num2;

$_SESSION["result"] = $result;
$_SESSION["num1"] = $num1;
$_SESSION["num2"] = $num2;

header("location:./index.php");