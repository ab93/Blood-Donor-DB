<?php
error_reporting(0);
session_start();

include_once 'user.php';
include_once 'healthReport.php';

class bank extends user //inherits user class
{
    public $avail_units;
    
    public function login() //for logging in
    {
       $db = new dbclass();
       $db->connect();
       
       $this->user_id = $_POST['user_id_bank'];
       //echo $this->user_id;
       $this->password = $_POST['password_bank'];
       $query = "select * from login where user_id = '$this->user_id'";
       $n = $db->rows($query);
       //echo $n;
       if($n <= 0)
       {
           echo '<script>window.location="login.php"; alert("Invalid userID");</script> ';
          
           $db->connectionClose();
       }
       else 
       {
           $query = "select password from bank where user_id = '$this->user_id'";
           $res = $db->fetch($query);
           //echo $pass_db[0];
           $pass_db = $res[0];
           if($this->password != $pass_db)
           {
               echo '<script>window.location="login.php"; alert("Invalid userID or password");</script> ';
           }
           else
           {
               $_SESSION['user_id'] = $this->user_id;
               $query = "update login set login_status ='Y' where user_id = '$this->user_id' ";
               $db->insert($query);
               echo '<script>window.location="searchForBank.php"; alert("Welcome!!");</script> ';
               
           }
           
           $db->connectionClose();
       }
       
       
    }
    
    public function logout() //for logging out
    {
        if(isset($_POST['logout_bank']))
        {
            $db = new dbclass();
            $db->connect();
            $this->user_id = $_SESSION['user_id'];
            $query = "update login set login_status ='N' where user_id = '$this->user_id' ";
            $db->insert($query);
            session_destroy();
            echo '<script>window.location="home.php"; alert("Logged out successfully");</script> ';
        }
    }
    
    public function search($location) //search donor based on location
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
    
    public function viewHealthReport() //view the health report
    {
        if(isset($_POST['search_health_report']))
        {
            $this->user_id = $_POST['user_id'];
            $report = new healthReport();
            $report->displayDetails($this->user_id);
            
        }
    }
    
}
$bank = new bank();
if(isset($_POST['login_bank']))
{
    $bank->login();
}
$bank->logout();