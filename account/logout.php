<?php
include_once('../server.php');
$session->destroy();
header('Location:../index.php');