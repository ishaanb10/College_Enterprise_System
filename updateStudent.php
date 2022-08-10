<?php
    $name = $_POST['name'];
    $prn = $_POST['prn'];
    $dept = $_POST['dept'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $mob = $_POST['mob'];

    $conn= mysqli_connect("localhost","root","","studentERP_final");

    if($conn->connect_error){
        die('Connection Failed: '.$conn->connect_error);
    }
    else{
        //$query = $conn->prepare( "insert into student values(NULL,'ish','2020-09-09','email1',9809989098,'d001');");
        
        $query = $conn->prepare("update student set values(NULL, ?, ?, ?, ?, ?) where prn=?;");
        
        $query->bind_param("sssisi",$name,$dob,$email,$mob,$dept,$prn);

        $query->execute();
        
        $query->close();
        $conn->close();
        echo "Inserted successfully";
    }
//prn, stuName, dob,emailID, mob, deptID
//https://www.techiedelight.com/restrict-html-input-text-box-to-allow-only-numeric-values/
//re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
?>
