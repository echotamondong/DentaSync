<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    
    
    <title>Calendar</title>
</head>
<body>
    <div id = "header">
        <div class="container">
    <nav>
        <img src="imgs/ds.png" class = "logo">
        <ul>
            <li><a href="index.php" class="active">Dashboard</a></li>
            <li><a href="pl.php">Patient List</a></li>
            <li><a href="calendar.php">Calendar</a></li>
            <li><a href="dg.php">Dental Gallery</a></li>
            <li><a href="msg.php">Notifications</a></li>
            <li><a href="apt.php">Appointments</a></li>
            <li><div class="scene">
                <div class="cube">
                  <span class="side top">Logout?</span>
                  <span class="side front">Hello, [DR.Name]</span>
                </div>
              </div></li>
        </ul>
    </nav>

    <!----------Title---------->
		<div class="header-text">
			<section id="reminder-section" class="welcome-section">
				<h1>Calendar</h1>
			</section>
            </div>
       <!----------end-of-title---------->
       <div class="calendar">
        <div class="container">
            <iframe src="https://calendar.google.com/calendar/embed?height=768&wkst=1&bgcolor=%23ffffff&ctz=Asia%2FManila&showPrint=0&showNav=1&showTabs=1&showTitle=0&showCalendars=1&src=YnVnc3l3YXBAZ21haWwuY29t&src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&src=ZW4ucGhpbGlwcGluZXMjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&color=%23039BE5&color=%2333B679&color=%230B8043" style="border:solid 1px #777" width="1360" height="760" frameborder="0" scrolling="no">
            </iframe>
        </div>
       </div>

       
</div>
</div>
    
</body>
</php>