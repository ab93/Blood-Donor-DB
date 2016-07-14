<?php
error_reporting(0);
session_start();

include_once 'dbclass.php';
include_once 'healthReport.php';
class admin // admin class
{
    private $user_id;
    private $password;
    
    function __construct() //constructor to predefine userID and password for admin 
    {
        $this->user_id = "cbba";
        $this->password = "admin";
    }


    public function login() //function for loggin in
    {
        $id = $_POST['user_id'];
        $pass = $_POST['password'];
        if(!($this->user_id==$id && $this->password==$pass))
        {
            echo '<script>window.location="loginAdmin.php"; alert("Invalid userID or password");</script> ';
            
          
        }
        else
        {
            $_SESSION['user_id'] = $this->user_id;
            header("Location: contentAdmin.php");
        }
        
        
    }
    
    public function logout() //function for logging out
    {
        session_destroy();
        header("Location: home.php");
    }
    
    public function ApprovePendingReport() //function for approving the pending reports from hospitals
    {
        $report_id = $_POST['report_id'];
       
        $db = new dbclass();
        $db->connect();
        $report_id = mysqli_real_escape_string($db->connection, $_POST['report_id']);
        $query = "select * from pending_report where report_id=$report_id " ;
       
        $result = mysqli_query($db->connection,$query);
        if (!$result) 
        {
        printf("Error: %s\n", mysqli_error($db->connection));
        exit();
        }
        $n = $db->rows($query);
        if($n==1)
        {
            $row = mysqli_fetch_array($result);
            $donor_id = $row['user_id'];
            $date = $row['date'];
            $amount = $row['amount'];
            $blood_group = $row['blood_group'];
            $type = $row['type'];
            $hospital_id = $row['hospital_id'];
            
            $query = "insert into donationreport(user_id,date,amount,blood_group,type,hospital_id) values('$donor_id','$date',$amount,'$blood_group','$type','$hospital_id')";
            $result = mysqli_query($db->connection,$query);
            if (!$result) 
            {
                printf("Error: %s\n", mysqli_error($db->connection));
                exit();
            }
            $query = "delete from pending_report where report_id=$report_id";
            $result = mysqli_query($db->connection,$query);
            if (!$result) 
            {
                printf("Error: %s\n", mysqli_error($db->connection));
                exit();
            }
            echo '<script>window.location="contentAdmin.php"; alert("Updated successfully!!");</script> ';
        }
        else
        {
            include 'contentAdmin.php';
            echo '<script>alert("No results found with this Report ID");</script> ';
            exit();
        }
        
    }
    
    public function viewPendingReport() //function to view pending reports from hospitals
    {
        $db = new dbclass();
        $db->connect();
        $query = "select * from pending_report";
        $result = mysqli_query($db->connection,$query);
        if (!$result) 
        {
        printf("Error: %s\n", mysqli_error($db->connection));
        exit();
        }
        echo "<table border='1' style=\"position: relative; left:400px; top:-100px;\">
              <tr>
              <th>Report ID</th>
              <th>Donor ID</th>
              <th>Date</th>
              <th>Amount</th>
              <th>Blood Group</th>
              <th>Type</th>
              <th>Hospital ID</th>
              </tr>";

        while($row = mysqli_fetch_array($result)){
           echo "<tr>";
           echo "<td>" . $row['report_id'] . "</td>";
           echo "<td>" . $row['user_id'] . "</td>";
           echo "<td>" . $row['date'] . "</td>";
           echo "<td>" . $row['amount'] . "</td>";
           echo "<td>" . $row['blood_group'] . "</td>";
           echo "<td>" . $row['type'] . "</td>";
           echo "<td>" . $row['hospital_id'] . "</td>";
           echo "</tr>";
        }
        
        echo "</table>";
        
    }


    public function viewHealthReport() //function to view the health report; calls the healthReport class
    {
            if(isset($_POST['search_health_report_admin']))
        {
            $this->user_id = $_POST['user_id'];
            $report = new healthReport();
            $report->displayDetails($this->user_id);
            
        }
    }
    
}

$admin = new admin();
if(isset($_POST['login_admin']))
{
    $admin->login();
}
if(isset($_POST['update_donation']))
{
    $admin->ApprovePendingReport();
}
if(isset($_POST['logout_admin']))
{
    $admin->logout();
}