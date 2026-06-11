<?php

include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = $_POST['complaint_title'];
    $description = $_POST['complaint_description'];

    $sql = "INSERT INTO fir_reports
            (complaint_title, complaint_description, status)
            VALUES
            ('$title','$description','Pending')";

    if(mysqli_query($conn,$sql)){
        echo "FIR Registered Successfully";
    } else {
        echo "Registration Failed";
    }
}

?>
