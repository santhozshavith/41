<?php

include "config.php";
$id = $_POST['id'];
echo "Hello, world!";
$query = "SELECT * FROM `work_progress` WHERE work_prog='1' and work_id = '" . $id . "'";
$result = mysqli_query($con, $query);
$work = mysqli_fetch_array($result);
if($work) {
    echo json_encode($work);
} else {
    echo "Error: " . mysqli_error($con);
}
?>
