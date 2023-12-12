<?php
include('config.php');
if (isset($_POST['submit'])) {

    $name = $_POST["name"];
    $doctor = $_POST["doctor"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $mobileNo = $_POST["mobileNo"];
    $status = $_POST["status"];
    $service = $_POST["service"];
    $schedule = $_POST["schedule"];
    $visit = $_POST["visit"];

    // If the selected visit option is "other", use the specified value
    if ($visit === "other") {
        $visit = $_POST["other_specify"];
    }

  $sql = "INSERT into `patients`(name,doctor,address,email,mobileNo,status,service,schedule)
  VALUES('$name','$doctor','$address','$email','$mobileNo','$status','$service','$schedule')";
  $result = mysqli_query($con, $sql);
  if ($result) {
    header('location: confirmations.php');
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
    <title>Booking</title>
</head>

<body>
    <h1 class="text-center my-5">Appointment Booking</h1>
    <div class="container my-5">
        <form method="POST">
            <div class="form-group">
                <label><b>Name</b></label>
                <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off">
            </div>
            <div class="form-group">
                <label><b>Date of birt</b>h</label>
                <input type="text" class="form-control" placeholder="YYYY-MM-DD" name="dateofbirth" autocomplete="off">
            </div>
            <div class="form-group">
                <label><b>Address</b></label>
                <input type="text" class="form-control" placeholder="Where do you live?" name="address" autocomplete="off">
            </div>
            <div class="form-group">
                <label><b>Mobile Number</b></label>
                <input type="text" class="form-control" placeholder="Enter your number" name="mobileNo" autocomplete="off">
            </div>
            <div class="form-group">
                <label><b>Gender</b></label>
                <select class="form-select" aria-label="select" name="gender">
                    <option selected>What's your gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Medyo">I'd rather not say</option>
                </select>
            </div>
            <div class="form-group">
                <label><b>Status</b></label>
                <select class="form-select" aria-label="select" name="status">
                    <option selected>I am a/an...</option>
                    <option value="Active">New Patient</option>
                    <option value="Inactive">Old Patient</option>
                </select>
            </div>
            <div class="form-group">
                <label><b>When was your last visit?</b></label>
                <select class="form-control" id="visitSelect" name="visit" onchange="toggleSpecifyField()">
                    <option value="within_last_3_months">Within the Last 3 Months</option>
                    <option value="3_to_6_months_ago">3-6 Months Ago</option>
                    <option value="6_to_12_months_ago">6-12 Months Ago</option>
                    <option value="1_to_2_years_ago">1-2 Years Ago</option>
                    <option value="more_than_2_years_ago">More Than 2 Years Ago</option>
                    <option value="new_patient">I'm a New Patient</option>
                    <option value="don't_remember">I Don't Remember</option>
                    <option value="emergency_visit">Emergency Visit Only</option>
                    <option value="regular_checkup">Regular Check-up (No issues)</option>
                    <option value="other">Other (Please Specify)</option>
                </select>
                <div id="specifyField" style="display: none;">
                    <label for="otherSpecify">Please Specify:</label>
                    <input type="text" class="form-control" id="otherSpecify" name="other_specify" placeholder="Specify here">
                </div>
            </div>

            <div class="form-group">
                <label><b>Choose a Doctor</b></label>
                <select class="form-select" aria-label="select" name="doctor">
                    <option selected>Who's your doctor?</option>
                    <option value="Dr1">Dr. Joshua Bantic</option>
                    <option value="Dr2">Dr. Colleen Esteras</option>
                </select>
                </div>
                <div class="form-group">
                    <label><b>Service</b></label>
                    <select class="form-select" aria-label="select" name="service">
                    <option selected>What's your desired service?</option>
                    <option value="Consultation">Consultation</option>
                    <option value="Cleaning">Cleaning</option>
                    <option value="Denture and Bridges">Denture and Bridges</option>
                    <option value="Oral Surgery">Oral Surgery</option>
                    <option value="Orthodontics">Orthodontics</option>
                </select>
                </div>
                <div class="form-group">
                <label><b>Schedule of appointment</b></label>
                <input type="text" class="form-control" placeholder="YYYY-MM-DD" name="schedule" autocomplete="off">
            </div>
            <div class="form-group">
                <label><b>Time of appointment</b></label>
                <input type="text" class="form-control" placeholder="00:00 AM/PM" name="schedule" autocomplete="off">
            </div>
            <div class="form-group">
                <label><b>Email</b></label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off">
            </div>
            <div class="form-group">
                <label><b>Medical History</b></label>
                <input type="text" class="form-control" placeholder="Tell us more about you" name="history" autocomplete="off">
            </div>
            <div class="form-group">
                <label><b>You can leave a note here:</b></label>
                <input type="text" class="form-control" placeholder="" name="comment" autocomplete="off">
            </div>
                <button type="submit" class="btn btn-primary my-3" name="submit">Submit</button>
        </form>
    </div>
    <script>
        function toggleSpecifyField() {
            var selectElement = document.getElementById("visitSelect");
            var specifyField = document.getElementById("specifyField");

            if (selectElement.value === "other") {
                specifyField.style.display = "block";
            } else {
                specifyField.style.display = "none";
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>