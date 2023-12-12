<?php
include('configs.php');
if (isset($_POST['submit'])) {

    $name = $_POST["name"];
    $doctor = $_POST["doctor"];
    $schedule = $_POST["schedule"];
    $service = $_POST["service"];

  $sql = "INSERT into `patients`(name,doctor,service,schedule)
  VALUES('$name','$doctor','$schedule','$service')";
  $result = mysqli_query($con, $sql);
  if ($result) {
    header('location: patientLists.php');
  } else {
    die(mysqli_error($con));
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Add Patient</title>
</head>

<body>
  <div class="container my-5">
    <form method="POST">
      <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off">
      </div>
      <div class="form-group">
        <label>Address</label>
        <input type="text" class="form-control" placeholder="Enter your address" name="address" autocomplete="off">
      </div>
      <div class="form-group">
        <label>Mobile Number</label>
        <input type="text" class="form-control" placeholder="Enter your mobile number" name="mobileNo" autocomplete="off">
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="text" class="form-control" placeholder="Enter your email" name="email" autocomplete="off">
      </div>
      <div class="form-group">
        <label>Doctor</label>
        <input type="text" class="form-control" placeholder="Enter your doctor" name="doctor" autocomplete="off">
      </div>
      <div class="form-group">
        <label>Status</label>
        <input type="text" class="form-control" placeholder="Status" name="status" autocomplete="off">
      </div>
      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
  </div>
</body>

</html>