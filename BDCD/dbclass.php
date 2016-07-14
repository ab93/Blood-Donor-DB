<?php

class dbclass 
{
    protected $db_name = 'BCDC';
    protected $db_user = 'root';
    protected $db_pass = '';
    protected $db_host = 'localhost';
    public $connection;
    
    public function connect()  //to establish connection
    {
        
        $this->connection = mysqli_connect("localhost", "root","","BDCD");
        if ($this->connection)
        {
            //echo "connection established!";
            return true;
        }
        else 
       {
            echo "failed!";
            return false;
       }
 
    
    }
    
    public function insert($query) //inserting a query
    {
        mysqli_query($this->connection, $query);
        
    }
    
    public function connectionClose() //for closing a connection
    {
        mysqli_close($this->connection);
    }

    public function rows($query) //returning the number of rows for a result
    {
        $result = mysqli_query($this->connection, $query);
        $rows = mysqli_num_rows($result);
        return $rows;
    }

    function fetch($query) //to get the the result of a query in an array
    {
        $result = mysqli_query($this->connection, $query);
        $row= mysqli_fetch_array($result);
        return($row);
    }
    
   
}