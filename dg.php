<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <title>Dental Gallery</title>
</head>
<body-dg>
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
                    <h1>Dental Gallery</h1>
                </section>
            </div>
            <!----------end-of-title---------->
            <!----------Cards---------->
            <div class="card-container">
                <div class="card-dg">
                    <div class="card-image-dg">
                        <img src="imgs/dnb.png" />
                    </div>
                    <p class="card-title-dg">Dentures and Bridges</p>
                    <p class="card-body-dg">
                        Dentures are removable prosthetics for replacing all or some missing teeth, while bridges are fixed structures anchored to adjacent natural teeth, aiming to restore oral function and appearance.
                    </p>
                    <button class="App-button" onclick="openPagednb()">Watch</button>
                    <p class="footer">Powered by <span class="by-name">DentaSync</span><span class="date">2023</span></p>
                </div>

                <div class="card-dg">
                    <div class="card-image-dg">
                        <img src="imgs/os.png" />
                    </div>
                    <p class="card-title-dg">Oral Surgery</p>
                    <p class="card-body-dg">
                        Oral surgery refers to any surgical procedure performed on your teeth, gums, jaws or other oral structures. This includes extractions, implants, gum grafts and jaw surgeries.
                    </p>
                    <button class="App-button" onclick="openPageos()">Watch</button>
                    <p class="footer">Powered by <span class="by-name">DentaSync</span><span class="date">2023</span></p>
                </div>

                <div class="card-dg">
                    <div class="card-image-dg">
                        <img src="imgs/orth.png" />
                    </div>
                    <p class="card-title-dg">Orthodontics</p>
                    <p class="card-body-dg">
                        Orthodontics is a branch of dentistry that focuses on the diagnosis, prevention, correction of misaligned teeth and jaws crooked, typically using braces or aligners to improve oral health and aesthetics.
                    </p>
                    <button class="App-button" onclick="openPageorth()">Watch</button>
                    <p class="footer">Powered by <span class="by-name">DentaSync</span><span class="date">2023</span></p>
                </div>

                <div class="card-dg">
                    <div class="card-image-dg">
                        <img src="imgs/pnp.png" />
                    </div>
                    <p class="card-title-dg">Periodontics and Preventive Dentistry</p>
                    <p class="card-body-dg">
                        Periodontics involves the treatment of diseases & conditions affecting the gums, while preventive dentistry focuses on measures to maintain oral health & prevent dental issues.
                    </p>
                    <button class="App-button" onclick="openPageppd()">Watch</button>
                    <p class="footer">Powered by <span class="by-name">DentaSync</span><span class="date">2023</span></p>
                </div>

                <div class="card-dg">
                    <div class="card-image-dg">
                        <img src="imgs/rnc.png" />
                    </div>
                    <p class="card-title-dg">Restoration and Cosmetic Dentistry</p>
                    <p class="card-body-dg">
                        Restoration dentistry involves repairing and replacing damaged or missing teeth for functional purposes, while cosmetic dentistry focuses on enhancing the aesthetics of the teeth and smile.
                    </p>
                    <button class="App-button" onclick="openPagernc()">Watch</button>
                    <p class="footer">Powered by <span class="by-name">DentaSync</span><span class="date">2023</span></p>
                </div>

                <div class="card-dg">
                    <div class="card-image-dg">
                        <img src="imgs/rc.png" />
                    </div>
                    <p class="card-title-dg">Root Canal Treatment</p>
                    <p class="card-body-dg">
                        Root canal treatment involves removing infected or damaged pulp from the inside of a tooth, cleaning and sealing the space, to save the tooth and alleviate pain or infection.
                    </p>
                    <button class="App-button" onclick="openPagerc()">Watch</button>
                    <p class="footer">Powered by <span class="by-name">DentaSync</span><span class="date">2023</span></p>
                </div>
            </div>

            <!----------end-of-cards---------->

            <!---script onclick watch-->

            <script>
                function openPagednb() {
                    window.open("vids/dnb.mp4", "_blank");
                }

                function openPagerc() {
                    window.open("vids/rc.mp4", "_blank");
                }

                function openPageos() {
                    window.open("vids/os.mp4", "_blank");
                }

                function openPagernc() {
                    window.open("vids/rnc.mp4", "_blank");
                }

                function openPageorth() {
                    window.open("vids/orth.mp4", "_blank");
                }

                function openPageppd() {
                    window.open("vids/ppd.mp4", "_blank");
                }
            </script>
            <!---end ofscript onclick watch-->



        </div>
    </div>

</body-dg>

</html>