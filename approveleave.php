<?php
require_once 'db/conn.php';
$id=$_GET['id'];
$r=1;
$result = $crud-> updateleaveapprove($r,$id);

if($result)
{
    header("Location:  leaverecord.php");
}
else{
    include 'includes/errormessage.php';
}

?>