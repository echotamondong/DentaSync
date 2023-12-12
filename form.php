<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Booking Form</title>
    <div class="form">
        <h1 id="title">Booking Survey</h1>
    <p id="desc">Please fill out this form with the necessary information.</p>
    <form id="survey">
        <fieldset>
            <div class="card-forms">
                <div class="card-container-forms">
            <label for="name" id="name">Enter your name: <input required id="name" type="text" placeholder="Name"/></label>
            <label for="dateofbirth" id="dob">Date of birth <input required id="dob" type="date" placeholder="Date of Birth"/></label>
            <label for="num" id="num">Enter your cellphone number: <input required id="num" type="text" placeholder="Cellphone Number"/></label>
            <label for="gender" id="gender"> 
                <select id="gender">
                <option value="" disabled selected>Please select your gender</option>
                <option label="Male">Male</option>
                <option label="Female">Female</option>
              </select></label>
              <label for="add" id="add">Address<input required id="address" type="text" placeholder="Where do you live?"/></label>
              <label for="reason" id="reason">When was your last visit? <input required id="reason" type="text" placeholder="When was your last visit?"/></label>
              <label for="service" id="service">Please select your desired service
                <select id="service">
                <option value="" disabled selected>Choose a service</option>
                <option label="Consultation">Consultation</option>
                <option label="Denture and Bridges">Denture and Bridges</option>
                <option label="Oral Surgery">Oral Surgery</option>
                <option label="Orthodontics">Orthodontics</option>
                <option label="Periodontics and Preventive Dentistry">Periodontics and Preventive Dentistry</option>
                <option label="Restoration and Cosmetic Surgery">Restoration and Cosmetic Surgery</option>
                <option label="Root Canal Treatment">Root Canal Treatment</option>
              </select></label>
              <label for="sched" id="sched">Schedule of appointment<input required id="sched" type="date" placeholder="Schedule"/></label>
              <label for="email" id="">Enter your email: <input required id="email" type="email" placeholder="Email"/></label>
              <label for="hist" id="history">Tell us more about yourself <input required id="hist" type="text" placeholder="Medical History"/></label>
              <label for="comment" id="comment">Enter comment<input required id="comment" type="text" placeholder="Do you have any comments?"/></label>
            </div>
        </div>
        </fieldset>
        <button id="button1">Submit</button>
    </form>
</div>
</head>
<body>
    
</body>
</html>