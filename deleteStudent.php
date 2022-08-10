<?php
    $prn = $_POST['prn'];
    
    $conn= mysqli_connect("localhost","root","","studentERP_final");

    if($conn->connect_error){
        die('Connection Failed: '.$conn->connect_error);
    }
    else{
        //$query = $conn->prepare( "insert into student values(NULL,'ish','2020-09-09','email1',9809989098,'d001');");
        echo $prn;
        $sql = "DELETE FROM student WHERE prn =$prn;";
        
        if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } 
        else{
            echo "Error deleting record: " . $conn->error;
        }
        
        /*
        $query = $conn->prepare("DELETE FROM student WHERE prn =?;");
        $query->bind_param("i",$prn);
        $query->close(); */

        $conn->close();
        //echo "Deleted successfully";
    }
//prn, stuName, dob,emailID, mob, deptID
//https://www.techiedelight.com/restrict-html-input-text-box-to-allow-only-numeric-values/
//re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
?>
