<?php

    if (isset($_POST['submit'])){
        $PatientName=$_POST['PatientName'];
        $DoctorsName=$_POST['DoctorsName'];
        $DepartmentsName=$_POST['DepartmentsName'];
        $PhoneNumber=$_POST['PhoneNumber'];
        $Symptoms=$_POST['Symptoms'];
       

        echo "Your appointment is booked :" .$PatientName."<br>";
        echo "Your appointment is booked :" .$DoctorsName."<br>";
        echo "Your appointment is booked:" .$DepartmentsName."<br>";
        echo "Your appointment is booked :" .$PhoneNumber."<br>";
        echo "Your appointment is booked:" .$Symptoms."<br>";
        
        
    }
?>






