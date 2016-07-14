<?php

include_once 'dbclass.php';
class donationReport 
{
    public $date;
    public $amount;
    public $blood_group;
    public $type;
    public $hospital_id;
    //public $hospital_name;
    
    public function getDetails($hospital_id) //get the details
    {
        $db = new dbclass();
        $db->connect();
        $donor_id = $_POST['donor_id'];
        $this->date = $_POST['date'];
        $this->blood_group = $_POST['blood_group'];
        $this->type = $_POST['type'];
        $this->amount = $_POST['amount'];
        
        //$query = "update pending_report set height=$this->height, weight=$this->weight, haemo_level=$this->haemo_level, allergies='$this->allergies', present_cond='$this->present_cond', last_updated='$this->last_updated' where user_id='$user_id' ";
        $query = "insert into pending_report(user_id,date,amount,blood_group,type,hospital_id) values('$donor_id','$this->date','$this->amount','$this->blood_group','$this->type','$hospital_id')";
        $result = mysqli_query($db->connection,$query);
        if (!$result) 
        {
            printf("Error: %s\n", mysqli_error($db->connection));
            exit();
        }
        
        
    }
    
}
