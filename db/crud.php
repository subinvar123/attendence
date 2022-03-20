<?php
class crud{
    private $db;

    function __construct($conn){
        $this->db = $conn;

    }

   public function insertattendee($fname ,$lname ,$dob ,$email ,$speciality){
       try {
        $sql = "INSERT INTO `attendee`( `firstname`, `lastname`, `dateofbirth`, `email`, `speciality_id`) VALUES (:fname ,:lname ,:dob,:email,:speciality)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':fname' ,$fname);
        $stmt->bindparam(':lname' ,$lname);
        $stmt->bindparam(':dob' ,$dob);
        $stmt->bindparam(':email' ,$email);
        $stmt->bindparam(':speciality' ,$speciality);
        $stmt->execute();

        return true;
       }

       catch (PDOExeption $e) {
           echo $e->getMessage();
           return false;
       }

   } 





   public function getattendee(){
       try{
    $sql = "SELECT * FROM `attendee` a inner join speciality s on a.speciality_id =s.speciality_id";
    $result =$this->db->query($sql);
    return $result;
       }
       catch (PDOExeption $e) {
        echo $e->getMessage();
        return false;
    }
   }


   public function getattendeedetails($id){
   try{
    $sql = "select * from attendee a inner join speciality s on a.speciality_id =s.speciality_id where attendee_id = :id";
    $stmt =$this->db->prepare($sql);
    $stmt->bindparam(':id' ,$id);
     $stmt->execute();

     $result =$stmt->fetch();
     
    return $result;
   }
   catch (PDOExeption $e) {
    echo $e->getMessage();
    return false;
}
   }  



   public function getspeciality(){
       try{
    $sql = "SELECT * FROM `speciality`;";
    $result =$this->db->query($sql);
    return $result;
   }
   catch (PDOExeption $e) {
    echo $e->getMessage();
    return false;
}

}

   public function updateattendee($fname ,$lname ,$dob ,$email ,$speciality,$attendee_id){
    try {
        $sql = "UPDATE `attendee` SET `firstname`=:fname,`lastname`=:lname,`dateofbirth`=:dob,`email`=:email,`speciality_id`=:speciality WHERE `attendee_id`=:attendee_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':fname' ,$fname);
        $stmt->bindparam(':lname' ,$lname);
        $stmt->bindparam(':dob' ,$dob);
        $stmt->bindparam(':email' ,$email);
        $stmt->bindparam(':speciality' ,$speciality);
        $stmt->bindparam(':attendee_id' ,$attendee_id);
        $stmt->execute();

        return true;
       }

       catch (PDOExeption $e) {
           echo $e->getMessage();
           return false;
       }

    }


    public function deleteattendee($attendee_id){

       try{ 
       $sql ="DELETE FROM `attendee` WHERE `attendee_id`=:attendee_id";
       $stmt = $this->db->prepare($sql);
       $stmt->bindparam(':attendee_id' ,$attendee_id);
       $stmt->execute();

       return true;

    }
    catch (PDOExeption $e) {
        echo $e->getMessage();
        return false;
    }
}
}
?>