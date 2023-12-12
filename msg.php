<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
   <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
   <title>Messages</title>
</head>

<body>
   <div id="header">
      <div class="container">
         <nav>
            <img src="imgs/ds.png" class="logo">
            <ul>
               <li><a href="index.php" class="active">Dashboard</a></li>
               <li><a href="pl.php">Patient List</a></li>
               <li><a href="calendar.php">Calendar</a></li>
               <li><a href="dg.php">Dental Gallery</a></li>
               <li><a href="msg.php">Notifications</a></li>
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
               <h1>Notifications</h1>
            </section>
         </div>
         <!----------end-of-title---------->

         <!----------Cards---------->
         <div class="card-container-msg">
            <div class="card-msg">
               <img src="imgs/sent.svg" class="sent">
               <h2>Sucessfully sent a message to [User]</h2>
            </div>



         </div>


         <!----------EndOfCards---------->

</body>

</html>