<?php
session_start();

include_once 'user.php';
include_once 'healthReport.php';

class donor extends user //inherits the user class
{
    public $gender;
    public $dob;
    public $last_donation;
    public $blood_group;
    
    public function login($id) 
    {
       $db = new dbclass();
       $db->connect();
       
      
       $this->user_id = $id;
       
       $this->password = $_POST['password_donor'];
       $query = "select * from login where user_id = '$this->user_id'";
       $n = $db->rows($query);
      
       if($n <= 0)
       {
           echo '<script>window.location="login.php?error=1&msg=InvaliduserID";</script>';
          
           $db->connectionClose();
       }
       else 
       {
           
           $query = "select password from donor where user_id = '$this->user_id'";
           $res = $db->fetch($query);
           
           $pass_db = $res[0];
           if($this->password != $pass_db)
           {
               echo '<script>window.location="login.php"; alert("Invalid userID or password");</script> ';
           }
           else
           {
               
               $query = "update login set login_status ='Y' where user_id = '$this->user_id' ";
               $db->insert($query);
               echo '<script>window.location="donorContent.php"; alert("Welcome!!");</script> ';
               
           }
           
           $db->connectionClose();
       }
       
       
    }
    
    public function logout($id) //function for logging out
    {
        
            $db = new dbclass();
            $db->connect();
            
            $this->user_id =$id;
            $query = "update login set login_status ='N' where user_id = '$this->user_id' ";
            $db->insert($query);
            session_destroy();
            echo '<script>window.location="home.php"; alert("Logged out successfully");</script> ';
     
    }
    
    public function viewHealthReport()
    {
        
            $this->user_id = $_SESSION['user_id'];
           
            $report = new healthReport();
            $report->displayDetails($this->user_id);
            
            
    }
    
    public function updateHealthReport()
    {
        $this->user_id = $_SESSION['user_id'];
        $report = new healthReport();
        $report->getDetails($this->user_id);
       
    }
}

$donor = new donor();
if(isset($_POST['login_donor']))
{
    $user_id = $_POST['user_id_donor'];
    
    $_SESSION['user_id']=  $user_id;
    
    $donor->login($user_id);

}
if(isset($_POST['logout_donor']))
{
   $donor->logout($_SESSION['user_id']);

}
if(isset($_POST['update']))
{
    $donor->updateHealthReport();
    
}