<?php
    $name = $_POST['name'];
    $prn = $_POST['prn'];
    $dept = $_POST['dept'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $mob = $_POST['mob'];

    $cs101= $_POST['wtl'];
    $cs102= $_POST['dwdm'];
    $cs103= $_POST['daa'];
    $cs104= $_POST['is'];
    $cs105= $_POST['fac']; 

    $conn= mysqli_connect("localhost","root","","studentERP_final");

    if($conn->connect_error){
        die('Connection Failed: '.$conn->connect_error);
    }
    else{
        //$query = $conn->prepare( "insert into student values(NULL,'ish','2020-09-09','email1',9809989098,'d001');");
        
        $query = $conn->prepare("insert into student values(?, ?, ?, ?, ?, ?);");
        $query->bind_param("isssis",$prn,$name,$dob,$email,$mob,$dept);


        $queryCS101=$conn->prepare("insert into marks values ('cs101',?,?);");
        $queryCS101->bind_param("ii",$prn,$cs101);

        $queryCS102=$conn->prepare("insert into marks values ('cs102',?,?);");
        $queryCS102->bind_param("ii",$prn,$cs102);
        
        $queryCS103=$conn->prepare("insert into marks values ('cs103',?,?);");
        $queryCS103->bind_param("ii",$prn,$cs103);
        
        $queryCS104=$conn->prepare("insert into marks values ('cs104',?,?);");
        $queryCS104->bind_param("ii",$prn,$cs104);
        
        $queryCS105=$conn->prepare("insert into marks values ('cs105',?,?);");
        $queryCS105->bind_param("ii",$prn,$cs105);


        $query->execute();
        $queryCS101->execute();
        $queryCS102->execute();
        $queryCS103->execute();
        $queryCS104->execute();
        $queryCS105->execute();
        
        $query->close();
        $queryCS101->close();
        $queryCS102->close();
        $queryCS103->close();
        $queryCS104->close();
        $queryCS105->close();

        $conn->close();
        echo "Inserted successfully";
    }
//prn, stuName, dob, emailID, mob, deptID
// subjID, prn, marks
//https://www.techiedelight.com/restrict-html-input-text-box-to-allow-only-numeric-values/
//re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
?>
