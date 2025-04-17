<?php
Abstract class ClgadmissionRegister
{
    abstract function admission_id();
}

class RDASchool extends ClgadmissionRegister{

    function schoolName()
    {
       echo "Rural Development Academy S & C";
    }

        function admission_id()
        {
            echo "Admission Id: 23986";
        }
        
}

class BCPSCSchool extends ClgadmissionRegister{
     

    function schoolName()
    {
       echo "Bogura Cantonment Public school & college";
    }
      function admission_id()
        {
            echo "Admission Id: 1122335";
        }
}
$rda1 = new RDASchool;
$rda1->schoolName();
echo "<br>";
$rda1->admission_id();
echo "<br>";

$bcpsc1 = new BCPSCSchool;
$rda1->schoolName();
echo "<br>";
$rda1->admission_id();
echo "<br>";




?>