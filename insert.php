<?php
$servername ="localhost";
$username ="root";
$password = "";
$dbname ="motors";
$conn = new mysqli($servername, $username, $password ,$dbname);
$create_db = $conn->query("CREATE DATABASE motors");
$create_table = $conn->query("CREATE TABLE info (`id` int(11) unsigned NOT NULL AUTO_INCREMENT, `motor1` INT, `motor2` INT, `motor3` INT, `motor4` INT, `motor5` INT, `motor6` INT, on1 INT, off1 INT,PRIMARY KEY (`id`))");
?>
