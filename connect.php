<?php
error_reporting(0);
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "admission form";
   
    $conn = mysql_connect($servername, $username, $password);







?>







<?php
     if($_POST['submit now'])
    {
        $studentname = $_POST['student_name'];
        $previousschoolname = $_POST['previous_school_name'];
        $fathername = $_POST['father_name'];
        $admittedclass = $_POST['admitted_class'];
        $mothername = $_POST['mother_name'];
        $dob = $_POST['dob'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $contactno = $_POST['contact_no'];
       
      $query =  INSERT INTO admission_form_data values('$studentname','$previousschoolname','$fathername','$admittedclass','
        $mothername','$dob','$address','$gender','$contactno');
        $data = mysqli_query($conn, $query);

        if ($data)
        {
            echo "Data Inserted Success"
        }
        else
        {
            echo "Failed";
        }
    }
?>
