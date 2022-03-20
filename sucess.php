<?php
$title='sucess';
 require_once 'includes/header.php';
 require_once 'db/conn.php';
 if(isset($_POST['submit'])){
   //extract values from the$_post array
   $fname = $_POST['firstname'];
   $lname = $_POST['lastname'];
   $dob = $_POST['dob'];
   $email = $_POST['email'];
   $speciality = $_POST['speciality'];
   $issucess = $crud->insertattendee($fname ,$lname ,$dob ,$email ,$speciality);
   if($issucess){
    include 'includes/successmessage.php';
   }
   else{ 
    include 'includes/errormessage.php';
  }
 }
  ?>


<h1 class="text-center text-success">you have registered</h1>


<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $_POST["firstname"] . " " . $_POST["lastname"]  ?></h5>
    
    <h6 class="card-subtitle mb-2 text-muted">SPECIALITY:<?php echo $_POST["speciality"]  ?></h6>
    <h6 class="card-subtitle mb-2 text-muted">DOB:<?php echo $_POST["dob"]  ?></h6>
    <h6 class="card-subtitle mb-2 text-muted">EMAIL:<?php echo $_POST["email"] ?></h6>
    <h6 class="card-subtitle mb-2 text-muted">PASSWORD:<?php echo $_POST["password"]  ?></h6>
   
  </div>
</div>          

<?php
/*
echo $_GET["firstname"];
echo $_GET["lastname"];
echo $_GET["dob"];
echo $_GET["speciality"];
echo $_GET["email"];
echo $_GET["password"];

*/
?>

</br>
    <?php require_once 'includes/footer.php' ;?>