<?php


include 'dbclass.php';

class user
{
  public $user_id;
  public $password;
  public $name;
  public $address;
  public $city;
  public $state;
  public $zip;
  public $phone;
  public $email;

 
}

class newMember extends user
{
    public function Register() //for registering a new member
    {
        $this->user_id = $_POST['user_id'];
        $this->password = $_POST['password'];
        $this->name = $_POST['name'];
        $this->address = $_POST['address'];
        $this->city = $_POST['city'];
        $this->state = $_POST['state'];
        $this->zip = $_POST['zip'];
        $this->phone = $_POST['phone'];
        $this->email = $_POST['email'];
        $db = new dbclass();
        if(isset($_POST['gender'])) //check if donor
        {
            $gender = $_POST['gender'];
            $dob = $_POST['dob'];
            $last_donation = $_POST['last_donation'];

            $blood_group = $_POST['blood_group'];
            
      
            $db->connect();
            $query1 = "insert into login values('$this->user_id','$this->password','N')";
            $query2 = "insert into donor values('$this->user_id', '$this->password','$this->name','$this->address','$this->city','$this->state','$this->zip','$this->phone','$this->email','$gender','$dob','$last_donation','$blood_group')";
            $db->insert($query1);
            $db->insert($query2);
            echo'<script>window.location="login.php"; alert("Registration successful"); </script> ';
            $db->connectionClose();
        }
        else if(isset($_POST['type'])) //check if hospital
        {
            $type = $_POST['type'];
            //echo $type;
            $db->connect();
            $query1 = "insert into login values('$this->user_id','$this->password','N')";
            $query2 = "insert into hospital values('$this->user_id', '$this->password','$this->name','$this->address','$this->city','$this->state','$this->zip','$this->phone','$this->email','$type')";
            $db->insert($query1);
            $db->insert($query2);
            echo'<script>window.location="login.php"; alert("Registration successful"); </script> ';
            $db->connectionClose();
            
        }
        else if(isset($_POST['avail_units'])) //check if blood bank
        {
            $avail_units = $_POST['avail_units'];
            //echo $avail_units;
            $db->connect();
            $query1 = "insert into login values('$this->user_id','$this->password','N')";
            $query2 = "insert into bank values('$this->user_id', '$this->password','$this->name','$this->address','$this->city','$this->state','$this->zip','$this->phone','$this->email','$avail_units')";
            $db->insert($query1);
            $db->insert($query2);
            echo'<script>window.location="login.php"; alert("Registration successful"); </script> ';
            $db->connectionClose();
        }
    }
}

$reg = new newMember();
if(isset($_POST['register']))
{
    $reg->Register();
}
