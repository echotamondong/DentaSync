<?php
include('config.php');
if (isset($_POST['submit'])) {

    $name = $_POST["name"];
    $doctor = $_POST["doctor"];
    $address = $_POST["address"];
    $email = $_POST["emailr"];
    $mobileNo = $_POST["mobileNo"];
    $status = $_POST["status"];
    $service = $_POST["service"];
    $schedule = $_POST["schedule"];

  $sql = "INSERT into `patients`(name,doctor,address,email,mobileNo,status,service,schedule)
  VALUES('$name','$doctor','$address','$email','$mobileNo','$status','$service','$schedule')";
  $result = mysqli_query($con, $sql);
  if ($result) {
    header('location: apts.php');
    echo "<meta http-equiv=\"refresh\" content=\"5;url=http://www.kafagwaydentalcenter.com\"/>";
  } else {
    die(mysqli_error($con));
  }
}
?>
<!DOCTYPE html>
<html>
  <body>
<link rel="stylesheet" href="logins.css">
<div class="form shadow-sm p-3 mb-5 bg-white rounded">
  <img src="imgs/dslilogo.png" class="logo">
  <form id="survey-form">
    <fieldset>
      <p>Appointment Booked Successfully! Please wait for the sms confirmation.</p>
    </fieldset>
  </form>
</div>
</body>
</html>