<?php
require_once ("config.php");
$name = $_POST["name"];
$suname = $_POST["suname"];
$weight = $_POST["weight"];
$club = $_POST["club"];
$query = "INSERT INTO `olimp`.`table` (`id`, `name`, `suname`, `weight`, `club`) VALUES (NULL, '$name', '$suname', '$weight', '$club');";
$result = mysqli_query($link,$query);
header("refresh:1;url=../index.html");
?>