<?php
$title='view records';
 require_once 'includes/header.php' ;
 //require_once 'includes/auth_check.php' ;
 require_once 'db/conn.php'; 

 $atle='attendance';

 if(isset($_POST['submit']) || isset($_POST['type'])){
 
    $employeename = $_POST['employeename'];
    $month = $_POST['month'];
    $year = $_POST['year'];

    $id  =  $_SESSION['userid'];
    $month = trim($month);
    $year  = trim($year);
    
   


    $month = trim($month);
    $year =trim($year);
    
    if(isset($_POST['type'])){
        $atle= $_POST['type'];
    }
    if($atle=='attendance'){
    $result = $crud->getattndancedetails( $month, $year, $atle ,$id,  $employeename);
    }
    if($atle=='leave'){
      $result = $crud->getleavedetails( $month, $year, $atle ,$id ,$employeename);
    }
    //print_r($issucess);getattndancedetails( $month, $year, $atle ,$id);
  }
 ?>
<div class="form-group col-md-3">
    <label for="attendance/leave">Attendance/Leave</label>
    <select class="form-control" id="attendance/leave" name="attendance/leave" onChange="attendanceLeaveDetails(this.value,<?php echo $employeename;?>,<?php echo $month;?>,
    <?php echo $year;?>)">
      <option value="attendance">Attendance</option>
      <option value="leave">Leave</option>
    </select>
  </div>
<?php if($atle=='attendance'){?>
<div class="replace_tab" id="yourDiv">
<table class="table">
  <thead>
    <tr>
     <!-- <th scope="col">id</th>
      <th scope="col">user_id</th>-->
      <th scope="col">Name</th>
      <th scope="col">Task</th>
      <th scope="col">Date</th>
      <th scope="col">Start time</th>
      <th scope="col">End time</th>
      <th scope="col">Working hours</th>
    
    </tr>
  </thead>
  <tbody>
    <tr>
       
    <?php 
    
    //print_r( $result);
    while($r = $result->fetch(PDO::FETCH_ASSOC)){?>
       <!-- <td><//?php echo $r['id'] ?></td>
      <td><//?php echo $r['user_id'] ?></td>-->
      <td><?php echo $r['firstname']   .' '.   $r['lastname'] ?></td>
      <td><?php echo $r['task'] ?></td>
      <td><?php echo $r['date'] ?></td>
      <td><?php echo $r['start_time'] ?></td>
      <td><?php echo $r['end_time'] ?></td>
      <td><?php echo $r['working_hours'] ?></td>
      
    </td>
    </tr>
   <?php } ?>
  </tbody>
</table>
</div>
<?php } ?>

<?php if($atle=='leave'){?>
    <div class="replace_tab">
<table class="table">
  <thead>
    <tr>
    <th scope="col">Name</th>
      <th scope="col">Leave type</th>
      <th scope="col">Status</th>
      <th scope="col">Start date</th>
      <th scope="col">End date</th>
      <th scope="col">Action</th>
    
    </tr>
  </thead>
  <tbody>
    <tr>
       
    <?php  
   
    while($r = $result->fetch(PDO::FETCH_ASSOC)){ ?>
     
      <td><?php echo $r['firstname']   .' '.   $r['lastname'] ?></td>
      <td><?php echo $r['leavetype'] ?></td>
      <td><?php if ($r['status']==1){echo "Approved";}
      elseif ($r['status']==2){echo "rejected";}
      else{echo "waiting for Approval";} ?></td>
      <td><?php echo $r['start_date'] ?></td>
      <td><?php echo $r['end_date'] ?></td>
      
      <?php 
      $class_disable="";
      if($r['status']!=0){
        $class_disable="disabled";
      }
      ?>
      <td>
      <button onclick="updateStatus(<?php echo $r['id'];?>,1)" id="statusBtn<?php echo $r['id']?>" class="btn btn-primary <?php echo $r['status']!=0?'disabled':''; ?>">Approve</button>
      <button onclick="updateStatus(<?php echo $r['id'];?>,2)" id="statusBtn<?php echo $r['id']?>" class="btn btn-warning <?php echo $r['status']!=0?'disabled':''; ?>">Reject</button>
    </td>
    </tr>
   <?php } ?>
  </tbody>
</table>
</div>
<?php } ?>
<?php require_once 'includes/footer.php' ;?>