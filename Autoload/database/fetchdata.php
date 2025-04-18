<?php
// class database{
//     public function dbconnection(){
//         $this->lost = "localhost";
//         $this->username = "root";
//         $this->pass = "";
//         $this->dbname = "oopcrud";

//         $conn = new mysqli($this->lost,$this->username,$this->pass,$this->dbname);
//    return $conn;
//    } 

// }



class Database {
    private $host;
    private $username;
    private $pass;
    private $dbname;

    public function __construct() {
        $this->host = "localhost";
        $this->username = "root";
        $this->pass = "";
        $this->dbname = "oopcrud";
    }

    public function dbconnection() {
        $conn = new mysqli($this->host, $this->username, $this->pass, $this->dbname);
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
        $userid = mt_rand(11111,99999);
        $uname = $data['uname'];
        $email = $data['email'];
        $upass = $data['password'];
        $sql = "INSERT INTO data(userid,uname,upass,uemail) values ('$userid','$uname','$upass','$email');";
        $data = $this->dbconnection()->query($sql);
        if($data)
        {
            echo "Data Inserted";

        }
        else 
        {
            echo "Something is wrong Not inserted";
        }
    }

    public function showDataUpdate($id)
    {
         $sql = "SELECT * FROM data where userid = $id";
         $data = $this->dbconnection()->query($sql);
         $result = $data->fetch_assoc();
         return $result;
        
    }

    public function updateData($data,$id)
    {   
        
        $uname = $data['uname'];
        $email = $data['email'];
        $upass = $data['password'];

        $sql = "UPDATE data set uname='$uname',upass='$upass',uemail='$email' WHERE userid = $id";

        $data = $this->dbconnection()->query($sql);
        if($data)
        {
            echo "Data Updated";
        }
        else 
        {
            echo "Can't update";
        }
    }


    public function deleteData($id)
    {
       

        $sql = "DELETE FROM data WHERE userid = $id";

        $data = $this->dbconnection()->query($sql);
        if($data)
        {
            echo "Data Deleted";
        }
        else 
        {
            echo "Can't DElete";
        }
    }
}

$obj = new queries();
$fetch_data = $obj->getData(); //in frontend we can print it
// echo "<pre>";
//  print_r($fetch_data);
//For inserting
 if(isset($_POST['submit'])){
    $obj->addData($_POST);
      header("Location: view_data.php");
    exit;
 }

 //For showing
  if(isset($_GET['id'])){
    $showUpdata = $obj->showDataUpdate($_GET['id']);
     
 }
//Update 
  if(isset($_POST['update']) && (isset($_GET['id']))){
    $obj->updateData($_POST,$_GET['id']);
    header("Location: view_data.php");
    exit;
 }

 //DELETE 

   if((isset($_GET['id']) && isset($_GET['name']))){
    $obj->deleteData($_GET['id']);
    header("Location: view_data.php");
    exit;
 }

?>