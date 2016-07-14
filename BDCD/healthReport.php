<?php
error_reporting(0);
session_start();

include_once 'dbclass.php';

class healthReport 
{
    public $height;
    public $weight;
    public $haemo_level;
    public $allergies;
    public $present_cond;
    public $last_updated;
    
    public function getDetails($user_id) //for taking details through a form 
    {
        $db = new dbclass();
        $db->connect();
        $this->height = $_POST['height'];
        $this->weight = $_POST['weight'];
        $this->haemo_level = $_POST['haemo_level'];
        $this->allergies = $_POST['allergies'];
        $this->present_cond = $_POST['present_cond'];
        $this->last_updated = $_POST['last_updated'];
        
        $query = "update healthreport set height=$this->height, weight=$this->weight, haemo_level=$this->haemo_level, allergies='$this->allergies', present_cond='$this->present_cond', last_updated='$this->last_updated' where user_id='$user_id' ";
        $result = mysqli_query($db->connection,$query);
        if (!$result) 
        {
        printf("Error: %s\n", mysqli_error($db->connection));
        exit();
        }
    }
    
    public function displayDetails($user_id) //for displaying details using a table
    {
        $db = new dbclass();
        $db->connect();
        $query = "select * from healthreport where user_id='$user_id'";
        $result = mysqli_query($db->connection,$query);
        if (!$result) 
        {
        printf("Error: %s\n", mysqli_error($db->connection));
        exit();
        }
        $n = $db->rows($query);
        if($n>0)
        {
            echo "<table border=1 style=\"position: relative; left:620px; top:-100px\">";
        while($row = mysqli_fetch_array($result))
        {
           echo "<tr>";
           echo "<td><b>UserID</td>";
           echo "<td>" . $row['user_id'] . "</td>";
           echo "</tr>";
           echo "<tr>";
           echo "<td><b>Height</td>";
           echo "<td>" . $row['height'] . "</td>";
           echo "</tr>";
           echo "<tr>";
           echo "<td><b>Weight</td>";
           echo "<td>" . $row['weight'] . "</td>";
           echo "</tr>";
           echo "<tr>";
           echo "<td><b>Haemo Level</td>";
           echo "<td>" . $row['haemo_level'] . "</td>";
           echo "</tr>";
           echo "<tr>";
           echo "<td><b>Allergies</td>";
           echo "<td>" . $row['allergies'] . "</td>";
           echo "</tr>";
           echo "<tr>";
           echo "<td><b>Present Condition</td>";
           echo "<td>" . $row['present_cond'] . "</td>";
           echo "</tr>";
           echo "<tr>";
           echo "<td><b>Last Updated</td>";
           echo "<td>" . $row['last_updated'] . "</td>";
           echo "</tr>";
        }
        
        echo "</table>";
              
        } 
        else
        {
            echo "<h4 style=\"position:relative; left:400px \">No health report available</h4>";
        }
    }
}
