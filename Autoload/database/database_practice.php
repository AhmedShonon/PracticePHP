<?php
class database_practice{
    public function dbconnect()
    {
        $this->host='localhost';
        $this->user='root';
        $this->pass ='';
        $this->dbname='oopcrud';

        $conn = new mysqli($this->host,$this->user,$this->pass,$this->dbname);
        if($conn->connect_error)
        {
            echo $conn->connect_error;
        }
        else 
        {
            echo "Database connected";
        }
    }
}

$obj = new database_practice();
$obj->dbconnect();







?>