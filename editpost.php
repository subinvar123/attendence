<?php
require_once 'db/conn.php';
if(isset($_POST['submit'])){
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $speciality = $_POST['speciality'];
    $attendee_id =$_POST['attendee_id'];

    $result = $crud->updateattendee($fname ,$lname ,$dob ,$email ,$speciality,$attendee_id);
//redirect to index page
if($result){
    header("Location: index.php");
}
else{
    include 'includes/errormessage.php';
}
}
else{
    include 'includes/errormessage.php';
}
?>