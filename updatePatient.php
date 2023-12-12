<?php
include 'configs.php';

$id = $_GET['updateid'];

if (isset($_POST['submit'])) {
    $name = $_POST["name"];
    $doctor = $_POST["doctor"];
    $schedule = $_POST["schedule"];
    $service = $_POST["service"];

    // Insert the updated data into patientLists table
    $insertSql = "INSERT INTO `patientLists` (name, doctor, service, schedule) VALUES ('$name', '$doctor', '$service', '$schedule')";
    $insertResult = mysqli_query($con, $insertSql);

    if ($insertResult) {
        // Delete the record from the patients table
        $deleteSql = "DELETE FROM `patients` WHERE name = '$name'";
        $deleteResult = mysqli_query($con, $deleteSql);

        if ($deleteResult) {
            header('location: patientLists.php');
        } else {
            die(mysqli_error($con));
        }
    } else {
        die(mysqli_error($con));
    }
}

// Fetch the patient data from the patients table
$selectSql = "SELECT * FROM `patients` WHERE name = '$id'";
$selectResult = mysqli_query($con, $selectSql);
$row = mysqli_fetch_assoc($selectResult);

$name = $row['name'];
$doctor = $row['doctor'];
$service = $row['service'];
$schedule = $row['schedule'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Patient List</title>
</head>

<body>
    <div class="container my-5">
        <form method="POST">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off" value="<?php echo $name; ?>" readonly>
            </div>
            <div class="form-group">
                <label>Doctor</label>
                <input type="text" class="form-control" placeholder="Enter your preferred Doctor" name="doctor" autocomplete="off" value="<?php echo $doctor; ?>" required>
            </div>
            <div class="form-group">
                <label>Service</label>
                <input type="text" class="form-control" placeholder="Enter service" name="service" autocomplete="off" value="<?php echo $service; ?>" required>
            </div>
            <div class="form-group">
                <label>Schedule</label>
                <input type="date" class="form-control" placeholder="Enter your preferred schedule" name="schedule" autocomplete="off" value="<?php echo $schedule; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>

</html>