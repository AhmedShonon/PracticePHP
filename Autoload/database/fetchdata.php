<?php
class database{
    public function dbconnection(){
        $this->lost = "localhost";
        $this->username = "root";
        $this->pass = "";
        $this->dbname = "oopcrud";

        $conn = new mysqli($this->lost,$this->username,$this->pass,$this->dbname);
   return $conn;
   } 

}
class queries extends database{
    public function getData()
    {
        $sql = "SELECT * FROM data";
        $data = $this->dbconnection()->query($sql);

        if($data->num_rows>0)
        {    
            // $arr = array();
            while($result = $data->fetch_assoc()){
                $arr[] = $result;
            }
            return $arr;
        }
        else 
        {
            echo "no data found";
        }
    }

    public function addData($data){
        echo "string";
            print_r($data);
    }
}

$obj = new queries();
$fetch_data = $obj->getData(); //in frontend we can print it
// echo "<pre>";
//  print_r($fetch_data);
 if(isset($_POST['submit'])){
    $obj->addData($_POST);
 }

?>