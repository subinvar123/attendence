<?php
$title='edit';
 require_once 'includes/header.php' ;
 require_once 'db/conn.php'; 
 $result =$crud->getspeciality();

 if(!isset($_GET['id'])){
    include 'includes/errormessage.php';
    header("Location: viewrecords.php");

 }
else{
    $id = $_GET['id'];
    $attendee =$crud->getattendeedetails($id);



 
 ?>
    <h1 class="text-center">registration</h1>
    <form method="post" action="editpost.php">
      <input type="hidden" name="attendee_id" value="<?php echo $attendee['attendee_id'] ?>" />
    <div class="form-group">
    <label for="name">firstname</label>
    <input type="text" class="form-control" value="<?php echo $attendee['firstname'] ?>" id="firstname" name="firstname" aria-describedby="emailHelp">
   
  </div>
    <div class="form-group">
    <label for="lastname">last name</label>
    <input type="text" class="form-control"value="<?php echo $attendee['lastname'] ?>"  id="lastname" name="lastname"  aria-describedby="emailHelp">
   
  </div>
  <div class="form-group">
    <label for="dob">date of birth</label>
    <input type="text" class="form-control"value="<?php echo $attendee['dateofbirth'] ?>"  id="dob" name="dob" aria-describedby="emailHelp">
    
  </div>
  <div class="form-group">
    <label for="speciality">AREA</label>
    <select class="form-control" value="<?php echo $attendee['speciality_id'] ?>" id="speciality" name="speciality">
      <?php while($r = $result->fetch(PDO::FETCH_ASSOC)) { ?>
        <option value ="<?php echo $r['speciality_id'] ?>" <?php if($r['speciality_id']==$attendee['speciality_id']) echo 'selected' ?>> <?php echo $r['name']; ?></option>
        <?php }?>
    </select>
  </div>
  <div class="form-group">
  <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" value="<?php echo $attendee['email'] ?>" name="email" aria-describedby="emailHelp" placeholder="Enter email">
    
  </div>
 
</br>
  <button type="submit" name="submit" class="btn btn-primary btn-block">Savechanges</button>
</form>
<?php }?>
</br>
    <?php require_once 'includes/footer.php' ;?>


    <selct>
        <option>