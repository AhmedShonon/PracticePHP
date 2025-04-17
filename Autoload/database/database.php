<?php
class database{

    public function connect()
    {
        $this->host = 'localhost';
        $this->username = 'root';
        $this->pass = '';
        $this->database='oopcrud';

        $conn = new mysqli($this->host,$this->username,$this->pass,$this->database);
        if($conn->connect_error){
        echo $conn->connect_error;
    }
    else 
    {
        echo "Database Connected";
    }
    }

    
}
$obj = new database();
$obj-> connect();
?>