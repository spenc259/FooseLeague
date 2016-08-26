<?php

require_once 'models/mydb.php';

$host = 'localhost';
$user = 'root';
$password = 'Aur0r4!!';
$table = 'league';

new Mydb($host, $user, $password, $table) or die("could not connect");