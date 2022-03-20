<?Php

require_once 'db/conn.php';
if(!isset($_GET['id'])){
    include 'includes/errormessage.php';
    header("Location: viewrecords.php");

 }
else{
    $id = $_GET['id'];
    $attendee =$crud->deleteattendee($id);
}
?>
