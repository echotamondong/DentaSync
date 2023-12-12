<?php
include('config.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Patient List</title>
</head>

<body>
    <div id="header">
        <div class="container-nav">
            <nav>
                <img src="imgs/ds.png" class="logo">
                <ul>
                    <li><a href="index.php" class="active">Dashboard</a></li>
                    <li><a href="pl.php">Patient List</a></li>
                    <li><a href="calendar.php">Calendar</a></li>
                    <li><a href="dg.php">Dental Gallery</a></li>
                    <li><a href="msg.php">Messages</a></li>
                    <li><a href="apt.php">Appointments</a></li>
                    <li>
                        <div class="scene">
                            <div class="cube">
                                <span class="side top">Logout?</span>
                                <span class="side front">Hello, [DR.Name]</span>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>

            <!----------Title---------->
            <div class="header-text">
                <section id="reminder-section" class="welcome-section">
                    <h1>Patient List</h1>
                </section>
            </div>
            <!----------end-of-title---------->

            <!----------Cards---------->
            <div class="container-table">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Mobile</th>
                        <th>Dr. Assigned</th>
                        <th>Status</th>
                        <th>More Information</th>
                    </tr>
                    <?php

                    $sql = "SELECT * FROM `patients`";
                    $result = mysqli_query($con, $sql);
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row['id'];
                            $name = $row['name'];
                            $mobileNo = $row['mobileNo'];
                            $doctor = $row['doctor'];
                            $status = $row['status'];

                            echo '<tr>
                            <th scope="row">' . $id . '</th>
                            <td>' . $name . '</td>
                            <td>' . $mobileNo . '</td>
                            <td>' . $doctor . '</td>
                            <td>' . $status . '</td>
                            <td>
                            <button class = "goto"><a href="chart.php?showid=' . $name . '" class = "text-dark">Dental Chart</a></button>
                            <button class = "goto"><a href="autoSms.php?showid=' . $name . '" class = "text-dark">Send Reminder</a></button>
                            </td>
                            </tr>';
                        }
                    }
                    ?>

            </div>


            <!----------endofcards---------->

</body>

</html>