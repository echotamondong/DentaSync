<?php
include('config.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Appointment</title>
</head>

<body>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Doctor Assigned</th>
                    <th scope="col">Service</th>
                    <th scope="col">Schedule</th>
                </tr>
            </thead>
            <tbody>

                <?php

                $sql = "SELECT * FROM `patients`";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $name = $row['name'];
                        $doctor = $row['doctor'];
                        $service = $row['service'];
                        $schedule = $row['schedule'];

                        echo '<tr>
                    <th scope="row">' . $name . '</th>
                    <td>' . $name . '</td>
                    <td>' . $doctor . '</td>
                    <td>' . $service . '</td>
                    <td>' . $schedule . '</td>
                    <td>
                    <button class = "btn btn-primary"><a href="updatePatient.php?updateid=' . $name . '" class = "text-light">Confirm Patient</a></button>
                    <button class = "btn btn-danger"><a href="deletePatient.php?deleteid=' . $name . '" class = "text-light">Decline Patient</a></button>
                </td>
                </tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>