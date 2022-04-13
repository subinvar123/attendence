<?php
require_once 'db/conn.php';
require_once 'includes/header.php' ;
$id=$_POST['updateId'];
$r=$_POST['status'];
$result = $crud-> updateleaveapprove($r,$id);
?>