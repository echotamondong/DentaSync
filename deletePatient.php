<?php
include 'configs.php';
if (isset($_GET['deleteid'])) {
    $name = $_GET['deleteid'];

    $sql = "DELETE From `patients` where name = $name";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location: apts.php');
    } else {
        die(mysqli_error($con));
    }
}
