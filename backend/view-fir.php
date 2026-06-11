<?php

include 'db.php';

$sql = "SELECT * FROM fir_reports";

$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result)){

    echo "FIR ID: "
         . $row['fir_id']
         . " - "
         . $row['status']
         . "<br>";

}
?>
