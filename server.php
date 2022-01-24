<?php
include_once 'Session.php';
$db = 'casestudysale';
$username = 'root';
$password = '';
$conn = new PDO('mysql:host=localhost;dbname='.$db, $username, $password);
date_default_timezone_set('Asia/Ho_Chi_Minh');
$session = new Session();
$session->start();
$date_current = '';
$date_current = date("Y-m-d");