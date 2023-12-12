<?php
include('config.php');
if (isset($_POST['submit'])) {

    $name = $_POST["name"];
    $doctor = $_POST["doctor"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $status = $_POST["status"];
    $service = $_POST["service"];
    $schedule = $_POST["schedule"];

  $sql = "INSERT into `patients`(name,doctor,address,email,mobile,status,service,schedule)
  VALUES('$name','$doctor','$address','$email','$mobile','$status','$service','$schedule')";
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
    <link rel="stylesheet" href="style.css">
    <title>Booking Form</title>
</head>
<body>
    <div class="form">
        <h1 id="title">Booking Survey</h1>
        <p id="desc">Please fill out this form with the necessary information.</p>
        <form id="survey" method="POST">
            <fieldset>
                <div class="card-forms">
                    <div class="card-container-forms">
                        <label for="name">Enter your name:</label>
                        <input required name="name" id="name" type="text" placeholder="Name" name = "name"/>

                        <label for="dateofbirth">Date of birth:</label>
                        <input required id="dateofbirth" type="date" placeholder="Date of Birth" />
                        
                        <label for="mobile">Enter your cellphone number:</label>
                        <input required id="mobile" type="text" placeholder="Cellphone Number" name = "mobile"/>
                        
                        <label for="gender">Please select your gender:</label>
                        <select id="gender" name="gender">
                            <option value="" disabled selected>Please select your gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        
                        <label for="address">Address:</label>
                        <input required id="address" type="text" placeholder="Where do you live?" name = "address" />

                        <label for="name">Status:</label>
                        <input required name="status" id="status" type="text" placeholder="Active or Inactive?" name = "status"/>
                        
                        <label for="reason">When was your last visit?</label>
                        <input required id="reason" type="date" placeholder="When was your last visit?" />
                        
                        <label for="doctor">Please select a doctor:</label>
                        <select id="doctor" name="doctor">
                            <option value="" disabled selected>Choose a doctor</option>
                            <option value="dr1">Doctor 1</option>
                            <option value="dr2">Doctor 2</option>
                        </select>
                        
                        <label for="service">Please select your desired service:</label>
                        <select id="service" name="service">
                            <option value="" disabled selected>Choose a service</option>
                            <option value="Consultation">Consultation</option>
                            <option value="Denture and Bridges">Denture and Bridges</option>
                            <option value="Oral Surgery">Oral Surgery</option>
                            <option value="Orthodontics">Orthodontics</option>
                            <option value="Periodontics and Preventive Dentistry">Periodontics and Preventive Dentistry</option>
                            <option value="Restoration and Cosmetic Surgery">Restoration and Cosmetic Surgery</option>
                            <option value="Root Canal Treatment">Root Canal Treatment</option>
                        </select>
                        
                        <label for="schedule">Schedule of appointment:</label>
                        <input required id="schedule" name="schedule" type="date" placeholder="Schedule" />
                        
                        <label for="email">Enter your email:</label>
                        <input required id="email" type="email" placeholder="Email" name = "email" />
                        
                        <label for="hist">Tell us more about yourself:</label>
                        <input required id="hist" type="text" placeholder="Medical History" />
                        
                        <label for="comment">Enter comment:</label>
                        <input required id="comment" type="text" placeholder="Do you have any comments?" />
                    </div>
                </div>
            </fieldset>
            <button id="button1" name="submit" type="submit">Submit</button>
        </form>
    </div>
</body>
</html>