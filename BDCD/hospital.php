<?php
error_reporting(0);
session_start();
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


include_once 'user.php';
include_once 'healthReport.php';
include_once 'donationReport.php';

class hospital extends user //inherits the user class
{
    public $type;
    
    public function login() //for logging in
    {
       $db = new dbclass();
       $db->connect();
       
       $this->user_id = $_POST['user_id_hospital'];
       
       $_SESSION['user_id'] = $this->user_id;
       $this->password = $_POST['password_hospital'];
       $query = "select * from login where user_id = '$this->user_id'";
       $n = $db->rows($query);
     
       if($n <= 0)
       {
           echo '<script>window.location="login.php"; alert("Invalid userID");</script> ';
          
           $db->connectionClose();
       }
       else 
       {
           
           $query = "select password from hospital where user_id = '$this->user_id'";
           $res = $db->fetch($query);
           //echo $pass_db[0];
           $pass_db = $res[0];
           if($this->password != $pass_db)
           {
               echo '<script>window.location="login.php"; alert("Invalid userID or password");</script> ';
           }
           else
           {
               $query = "update login set login_status ='Y' where user_id = '$this->user_id' ";
               $db->insert($query);
               header("Location: Search.php");
               
               
               
           }
           
           $db->connectionClose();
       }
       
       
    }
    
    public function logout() //for logging out
    {
        if(isset($_POST['logout']))
        {
            $db = new dbclass();
            $db->connect();
            $this->user_id = $_SESSION['user_id'];
            $query = "update login set login_status ='N' where user_id = '$this->user_id' ";
            $db->insert($query);
            session_destroy();
            header("Location: home.php");
         
        }
    }
    
    public function search($location) //searching a donor based upon the location
    {
      $db = new dbclass();
      $db->connect();
      //echo $location;
      $query = "select user_id,name,address,city,zip,phone_no,email,gender,dob,last_donation,blood_group from donor where address like '%$location%'";
      $result = mysqli_query($db->connection,$query);
      if (!$result) 
      {
        printf("Error: %s\n", mysqli_error($db->connection));
        exit();
      }
      echo "<table border='1' style=\"position: relative; left:320px; top:-100px\">
              <tr>
              <th>UserID</th>
              <th>Name</th>
              <th>Address</th>
              <th>City</th>
              <th>Zip</th>
              <th>Phone</th>
              <th>Email</th>
              <th>Gender</th>
              <th>DOB</th>
              <th>Last Donation</th>
              <th>Blood Group</th>
              </tr>";

        while($row = mysqli_fetch_array($result)){
           echo "<tr>"; 
           echo "<td>" . $row['user_id'] . "</td>";
           echo "<td>" . $row['name'] . "</td>";
           echo "<td>" . $row['address'] . "</td>";
           echo "<td>" . $row['city'] . "</td>";
           echo "<td>" . $row['zip'] . "</td>";
           echo "<td>" . $row['phone_no'] . "</td>";
           echo "<td>" . $row['email'] . "</td>";
           echo "<td>" . $row['gender'] . "</td>";
           echo "<td>" . $row['dob'] . "</td>";
           echo "<td>" . $row['last_donation'] . "</td>";
           echo "<td>" . $row['blood_group'] . "</td>";
           echo "</tr>";
        }
        
        echo "</table>";
    }
    
    public function sendDonationReport() //sending the donation report to the admin for evaluation
    {
        
        $this->user_id = $_SESSION['user_id'];
        //echo $this->user_id;
        $report = new donationReport();
        $report->getDetails($this->user_id);
        echo '<script>window.location="Search.php"; alert("Updated successfully");</script> ';
    }


    public function viewHealthReport() //view the health report of specified user_id
    {
        if(isset($_POST['search_health_report']))
        {
            $this->user_id = $_POST['user_id'];
            $report = new healthReport();
            $report->displayDetails($this->user_id);
            
        }
    }
}

$hospital = new hospital();
if(isset($_POST['login_hospital']))
{
    $hospital->login();
   
}
if(isset($_POST['logout']))
{
    $hospital->logout();
}
if(isset($_POST['send']))
{
    $hospital->sendDonationReport();
    
}

