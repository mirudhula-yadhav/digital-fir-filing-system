<?php

include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fir_id = $_POST['fir_id'];
    $status = $_POST['status'];

    $sql = "UPDATE fir_reports
            SET status='$status'
            WHERE fir_id='$fir_id'";

    if(mysqli_query($conn,$sql)){
        echo "Status Updated";
    } else {
        echo "Update Failed";
    }
}

?>
