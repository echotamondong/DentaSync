<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
  <title>Dental Record Chart</title>
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
      <form class="previous">
        <input type="button" value="Go back to previous page" onclick="history.go(-1)">
      </form>
      <div class="header-text">
        <section id="reminder-section" class="welcome-section">
          <h1>Dental Chart</h1>
        </section>
      </div>
      <!----------end-of-title---------->

      <div class="chart-container">
        <div class="dchart">
          <select id="select">
            <option value="" selected>Status: </option>
            <optgroup label="Conditions">
              <option value="1-1">✓</option>
              <option value="1-2">D</option>
              <option value="1-3">M</option>
              <option value="1-4">Mo</option>
              <option value="1-5">Im</option>
              <option value="1-6">Sp</option>
              <option value="1-7">Rf</option>
              <option value="1-8">Un</option>
            </optgroup>
            <optgroup label="Restorations & Prosthetics">
              <option value="2-1">Am</option>
              <option value="2-2">Co</option>
              <option value="2-3">JC</option>
              <option value="2-4">Ab</option>
              <option value="2-5">Att</option>
              <option value="2-6">P</option>
              <option value="2-7">In</option>
              <option value="2-8">Imp</option>
              <option value="2-9">S</option>
              <option value="2-10">Rm</option>
            </optgroup>
            <optgroup label="Surgery">
              <option value="3-1">X</option>
              <option value="3-2">XO</option>
            </optgroup>
          </select>
          <select id="select">
            <option value="" selected>Status: </option>
            <optgroup label="Conditions">
              <option value="1-1">✓</option>
              <option value="1-2">D</option>
              <option value="1-3">M</option>
              <option value="1-4">Mo</option>
              <option value="1-5">Im</option>
              <option value="1-6">Sp</option>
              <option value="1-7">Rf</option>
              <option value="1-8">Un</option>
            </optgroup>
            <optgroup label="Restorations & Prosthetics">
              <option value="2-1">Am</option>
              <option value="2-2">Co</option>
              <option value="2-3">JC</option>
              <option value="2-4">Ab</option>
              <option value="2-5">Att</option>
              <option value="2-6">P</option>
              <option value="2-7">In</option>
              <option value="2-8">Imp</option>
              <option value="2-9">S</option>
              <option value="2-10">Rm</option>
            </optgroup>
            <optgroup label="Surgery">
              <option value="3-1">X</option>
              <option value="3-2">XO</option>
            </optgroup>
          </select>
          <h2>55</h2>
          <img src="imgs/dgchart.svg" class="dchart-box">
        </div>
        <div class="dchart">
          <select id="select">
            <option value="" selected>Status: </option>
            <optgroup label="Conditions">
              <option value="1-1">✓</option>
              <option value="1-2">D</option>
              <option value="1-3">M</option>
              <option value="1-4">Mo</option>
              <option value="1-5">Im</option>
              <option value="1-6">Sp</option>
              <option value="1-7">Rf</option>
              <option value="1-8">Un</option>
            </optgroup>
            <optgroup label="Restorations & Prosthetics">
              <option value="2-1">Am</option>
              <option value="2-2">Co</option>
              <option value="2-3">JC</option>
              <option value="2-4">Ab</option>
              <option value="2-5">Att</option>
              <option value="2-6">P</option>
              <option value="2-7">In</option>
              <option value="2-8">Imp</option>
              <option value="2-9">S</option>
              <option value="2-10">Rm</option>
            </optgroup>
            <optgroup label="Surgery">
              <option value="3-1">X</option>
              <option value="3-2">XO</option>
            </optgroup>
          </select>
          <select id="select">
            <option value="" selected>Status: </option>
            <optgroup label="Conditions">
              <option value="1-1">✓</option>
              <option value="1-2">D</option>
              <option value="1-3">M</option>
              <option value="1-4">Mo</option>
              <option value="1-5">Im</option>
              <option value="1-6">Sp</option>
              <option value="1-7">Rf</option>
              <option value="1-8">Un</option>
            </optgroup>
            <optgroup label="Restorations & Prosthetics">
              <option value="2-1">Am</option>
              <option value="2-2">Co</option>
              <option value="2-3">JC</option>
              <option value="2-4">Ab</option>
              <option value="2-5">Att</option>
              <option value="2-6">P</option>
              <option value="2-7">In</option>
              <option value="2-8">Imp</option>
              <option value="2-9">S</option>
              <option value="2-10">Rm</option>
            </optgroup>
            <optgroup label="Surgery">
              <option value="3-1">X</option>
              <option value="3-2">XO</option>
            </optgroup>
          </select>
          <h2>54</h2>
          <img src="imgs/dgchart.svg" class="dchart-box">
        </div>
        <div class="dchart">
          <select id="select">
            <option value="" selected>Status: </option>
            <optgroup label="Conditions">
              <option value="1-1">✓</option>
              <option value="1-2">D</option>
              <option value="1-3">M</option>
              <option value="1-4">Mo</option>
              <option value="1-5">Im</option>
              <option value="1-6">Sp</option>
              <option value="1-7">Rf</option>
              <option value="1-8">Un</option>
            </optgroup>
            <optgroup label="Restorations & Prosthetics">
              <option value="2-1">Am</option>
              <option value="2-2">Co</option>
              <option value="2-3">JC</option>
              <option value="2-4">Ab</option>
              <option value="2-5">Att</option>
              <option value="2-6">P</option>
              <option value="2-7">In</option>
              <option value="2-8">Imp</option>
              <option value="2-9">S</option>
              <option value="2-10">Rm</option>
            </optgroup>
            <optgroup label="Surgery">
              <option value="3-1">X</option>
              <option value="3-2">XO</option>
            </optgroup>
          </select>
          <select id="select">
            <option value="" selected>Status: </option>
            <optgroup label="Conditions">
              <option value="1-1">✓</option>
              <option value="1-2">D</option>
              <option value="1-3">M</option>
              <option value="1-4">Mo</option>
              <option value="1-5">Im</option>
              <option value="1-6">Sp</option>
              <option value="1-7">Rf</option>
              <option value="1-8">Un</option>
            </optgroup>
            <optgroup label="Restorations & Prosthetics">
              <option value="2-1">Am</option>
              <option value="2-2">Co</option>
              <option value="2-3">JC</option>
              <option value="2-4">Ab</option>
              <option value="2-5">Att</option>
              <option value="2-6">P</option>
              <option value="2-7">In</option>
              <option value="2-8">Imp</option>
              <option value="2-9">S</option>
              <option value="2-10">Rm</option>
            </optgroup>
            <optgroup label="Surgery">
              <option value="3-1">X</option>
              <option value="3-2">XO</option>
            </optgroup>
          </select>
          <h2>53</h2>
          <img src="imgs/dgchart.svg" class="dchart-box">
        </div>
        <div class="dchart">
          <select id="select">
            <option value="" selected>Status: </option>
            <optgroup label="Conditions">
              <option value="1-1">✓</option>
              <option value="1-2">D</option>
              <option value="1-3">M</option>
              <option value="1-4">Mo</option>
              <option value="1-5">Im</option>
              <option value="1-6">Sp</option>
              <option value="1-7">Rf</option>
              <option value="1-8">Un</option>
            </optgroup>
            <optgroup label="Restorations & Prosthetics">
              <option value="2-1">Am</option>
              <option value="2-2">Co</option>
              <option value="2-3">JC</option>
              <option value="2-4">Ab</option>
              <option value="2-5">Att</option>
              <option value="2-6">P</option>
              <option value="2-7">In</option>
              <option value="2-8">Imp</option>
              <option value="2-9">S</option>
              <option value="2-10">Rm</option>
            </optgroup>
            <optgroup label="Surgery">
              <option value="3-1">X</option>
              <option value="3-2">XO</option>
            </optgroup>
          </select>
          <select id="select">
            <option value="" selected>Status: </option>
            <optgroup label="Conditions">
              <option value="1-1">✓</option>
              <option value="1-2">D</option>
              <option value="1-3">M</option>
              <option value="1-4">Mo</option>
              <option value="1-5">Im</option>
              <option value="1-6">Sp</option>
              <option value="1-7">Rf</option>
              <option value="1-8">Un</option>
            </optgroup>
            <optgroup label="Restorations & Prosthetics">
              <option value="2-1">Am</option>
              <option value="2-2">Co</option>
              <option value="2-3">JC</option>
              <option value="2-4">Ab</option>
              <option value="2-5">Att</option>
              <option value="2-6">P</option>
              <option value="2-7">In</option>
              <option value="2-8">Imp</option>
              <option value="2-9">S</option>
              <option value="2-10">Rm</option>
            </optgroup>
            <optgroup label="Surgery">
              <option value="3-1">X</option>
              <option value="3-2">XO</option>
            </optgroup>
          </select>
          <h2>52</h2>
          <img src="imgs/dgchart.svg" class="dchart-box">
        </div>
        <div class="dchart">
          <select id="select">
            <option value="" selected>Status: </option>
            <optgroup label="Conditions">
              <option value="1-1">✓</option>
              <option value="1-2">D</option>
              <option value="1-3">M</option>
              <option value="1-4">Mo</option>
              <option value="1-5">Im</option>
              <option value="1-6">Sp</option>
              <option value="1-7">Rf</option>
              <option value="1-8">Un</option>
            </optgroup>
            <optgroup label="Restorations & Prosthetics">
              <option value="2-1">Am</option>
              <option value="2-2">Co</option>
              <option value="2-3">JC</option>
              <option value="2-4">Ab</option>
              <option value="2-5">Att</option>
              <option value="2-6">P</option>
              <option value="2-7">In</option>
              <option value="2-8">Imp</option>
              <option value="2-9">S</option>
              <option value="2-10">Rm</option>
            </optgroup>
            <optgroup label="Surgery">
              <option value="3-1">X</option>
              <option value="3-2">XO</option>
            </optgroup>
          </select>
          <select id="select">
            <option value="" selected>Status: </option>
            <optgroup label="Conditions">
              <option value="1-1">✓</option>
              <option value="1-2">D</option>
              <option value="1-3">M</option>
              <option value="1-4">Mo</option>
              <option value="1-5">Im</option>
              <option value="1-6">Sp</option>
              <option value="1-7">Rf</option>
              <option value="1-8">Un</option>
            </optgroup>
            <optgroup label="Restorations & Prosthetics">
              <option value="2-1">Am</option>
              <option value="2-2">Co</option>
              <option value="2-3">JC</option>
              <option value="2-4">Ab</option>
              <option value="2-5">Att</option>
              <option value="2-6">P</option>
              <option value="2-7">In</option>
              <option value="2-8">Imp</option>
              <option value="2-9">S</option>
              <option value="2-10">Rm</option>
            </optgroup>
            <optgroup label="Surgery">
              <option value="3-1">X</option>
              <option value="3-2">XO</option>
            </optgroup>
          </select>
          <h2>51</h2>
          <img src="imgs/dgchart.svg" class="dchart-box">
        </div>
        <div class="dchart">
          <select id="select">
            <option value="" selected>Status: </option>
            <optgroup label="Conditions">
              <option value="1-1">✓</option>
              <option value="1-2">D</option>
              <option value="1-3">M</option>
              <option value="1-4">Mo</option>
              <option value="1-5">Im</option>
              <option value="1-6">Sp</option>
              <option value="1-7">Rf</option>
              <option value="1-8">Un</option>
            </optgroup>
            <optgroup label="Restorations & Prosthetics">
              <option value="2-1">Am</option>
              <option value="2-2">Co</option>
              <option value="2-3">JC</option>
              <option value="2-4">Ab</option>
              <option value="2-5">Att</option>
              <option value="2-6">P</option>
              <option value="2-7">In</option>
              <option value="2-8">Imp</option>
              <option value="2-9">S</option>
              <option value="2-10">Rm</option>
            </optgroup>
            <optgroup label="Surgery">
              <option value="3-1">X</option>
              <option value="3-2">XO</option>
            </optgroup>
          </select>
          <select id="select">
            <option value="" selected>Status: </option>
            <optgroup label="Conditions">
              <option value="1-1">✓</option>
              <option value="1-2">D</option>
              <option value="1-3">M</option>
              <option value="1-4">Mo</option>
              <option value="1-5">Im</option>
              <option value="1-6">Sp</option>
              <option value="1-7">Rf</option>
              <option value="1-8">Un</option>
            </optgroup>
            <optgroup label="Restorations & Prosthetics">
              <option value="2-1">Am</option>
              <option value="2-2">Co</option>
              <option value="2-3">JC</option>
              <option value="2-4">Ab</option>
              <option value="2-5">Att</option>
              <option value="2-6">P</option>
              <option value="2-7">In</option>
              <option value="2-8">Imp</option>
              <option value="2-9">S</option>
              <option value="2-10">Rm</option>
            </optgroup>
            <optgroup label="Surgery">
              <option value="3-1">X</option>
              <option value="3-2">XO</option>
            </optgroup>
          </select>
          <h2>61</h2>
          <img src="imgs/dgchart.svg" class="dchart-box">
        </div>
        <div class="dchart">
          <select id="select">
            <option value="" selected>Status: </option>
            <optgroup label="Conditions">
              <option value="1-1">✓</option>
              <option value="1-2">D</option>
              <option value="1-3">M</option>
              <option value="1-4">Mo</option>
              <option value="1-5">Im</option>
              <option value="1-6">Sp</option>
              <option value="1-7">Rf</option>
              <option value="1-8">Un</option>
            </optgroup>
            <optgroup label="Restorations & Prosthetics">
              <option value="2-1">Am</option>
              <option value="2-2">Co</option>
              <option value="2-3">JC</option>
              <option value="2-4">Ab</option>
              <option value="2-5">Att</option>
              <option value="2-6">P</option>
              <option value="2-7">In</option>
              <option value="2-8">Imp</option>
              <option value="2-9">S</option>
              <option value="2-10">Rm</option>
            </optgroup>
            <optgroup label="Surgery">
              <option value="3-1">X</option>
              <option value="3-2">XO</option>
            </optgroup>
          </select>
          <select id="select">
            <option value="" selected>Status: </option>
            <optgroup label="Conditions">
              <option value="1-1">✓</option>
              <option value="1-2">D</option>
              <option value="1-3">M</option>
              <option value="1-4">Mo</option>
              <option value="1-5">Im</option>
              <option value="1-6">Sp</option>
              <option value="1-7">Rf</option>
              <option value="1-8">Un</option>
            </optgroup>
            <optgroup label="Restorations & Prosthetics">
              <option value="2-1">Am</option>
              <option value="2-2">Co</option>
              <option value="2-3">JC</option>
              <option value="2-4">Ab</option>
              <option value="2-5">Att</option>
              <option value="2-6">P</option>
              <option value="2-7">In</option>
              <option value="2-8">Imp</option>
              <option value="2-9">S</option>
              <option value="2-10">Rm</option>
            </optgroup>
            <optgroup label="Surgery">
              <option value="3-1">X</option>
              <option value="3-2">XO</option>
            </optgroup>
          </select>
          <h2>62</h2>
          <img src="imgs/dgchart.svg" class="dchart-box">
        </div>
        <div class="dchart">
          <select id="select">
            <option value="" selected>Status: </option>
            <optgroup label="Conditions">
              <option value="1-1">✓</option>
              <option value="1-2">D</option>
              <option value="1-3">M</option>
              <option value="1-4">Mo</option>
              <option value="1-5">Im</option>
              <option value="1-6">Sp</option>
              <option value="1-7">Rf</option>
              <option value="1-8">Un</option>
            </optgroup>
            <optgroup label="Restorations & Prosthetics">
              <option value="2-1">Am</option>
              <option value="2-2">Co</option>
              <option value="2-3">JC</option>
              <option value="2-4">Ab</option>
              <option value="2-5">Att</option>
              <option value="2-6">P</option>
              <option value="2-7">In</option>
              <option value="2-8">Imp</option>
              <option value="2-9">S</option>
              <option value="2-10">Rm</option>
            </optgroup>
            <optgroup label="Surgery">
              <option value="3-1">X</option>
              <option value="3-2">XO</option>
            </optgroup>
          </select>
          <select id="select">
            <option value="" selected>Status: </option>
            <optgroup label="Conditions">
              <option value="1-1">✓</option>
              <option value="1-2">D</option>
              <option value="1-3">M</option>
              <option value="1-4">Mo</option>
              <option value="1-5">Im</option>
              <option value="1-6">Sp</option>
              <option value="1-7">Rf</option>
              <option value="1-8">Un</option>
            </optgroup>
            <optgroup label="Restorations & Prosthetics">
              <option value="2-1">Am</option>
              <option value="2-2">Co</option>
              <option value="2-3">JC</option>
              <option value="2-4">Ab</option>
              <option value="2-5">Att</option>
              <option value="2-6">P</option>
              <option value="2-7">In</option>
              <option value="2-8">Imp</option>
              <option value="2-9">S</option>
              <option value="2-10">Rm</option>
            </optgroup>
            <optgroup label="Surgery">
              <option value="3-1">X</option>
              <option value="3-2">XO</option>
            </optgroup>
          </select>
          <h2>63</h2>
          <img src="imgs/dgchart.svg" class="dchart-box">
        </div>
        <div class="dchart">
          <select id="select">
            <option value="" selected>Status: </option>
            <optgroup label="Conditions">
              <option value="1-1">✓</option>
              <option value="1-2">D</option>
              <option value="1-3">M</option>
              <option value="1-4">Mo</option>
              <option value="1-5">Im</option>
              <option value="1-6">Sp</option>
              <option value="1-7">Rf</option>
              <option value="1-8">Un</option>
            </optgroup>
            <optgroup label="Restorations & Prosthetics">
              <option value="2-1">Am</option>
              <option value="2-2">Co</option>
              <option value="2-3">JC</option>
              <option value="2-4">Ab</option>
              <option value="2-5">Att</option>
              <option value="2-6">P</option>
              <option value="2-7">In</option>
              <option value="2-8">Imp</option>
              <option value="2-9">S</option>
              <option value="2-10">Rm</option>
            </optgroup>
            <optgroup label="Surgery">
              <option value="3-1">X</option>
              <option value="3-2">XO</option>
            </optgroup>
          </select>
          <select id="select">
            <option value="" selected>Status: </option>
            <optgroup label="Conditions">
              <option value="1-1">✓</option>
              <option value="1-2">D</option>
              <option value="1-3">M</option>
              <option value="1-4">Mo</option>
              <option value="1-5">Im</option>
              <option value="1-6">Sp</option>
              <option value="1-7">Rf</option>
              <option value="1-8">Un</option>
            </optgroup>
            <optgroup label="Restorations & Prosthetics">
              <option value="2-1">Am</option>
              <option value="2-2">Co</option>
              <option value="2-3">JC</option>
              <option value="2-4">Ab</option>
              <option value="2-5">Att</option>
              <option value="2-6">P</option>
              <option value="2-7">In</option>
              <option value="2-8">Imp</option>
              <option value="2-9">S</option>
              <option value="2-10">Rm</option>
            </optgroup>
            <optgroup label="Surgery">
              <option value="3-1">X</option>
              <option value="3-2">XO</option>
            </optgroup>
          </select>
          <h2>64</h2>
          <img src="imgs/dgchart.svg" class="dchart-box">
        </div>
        <div class="dchart">
          <select id="select">
            <option value="" selected>Status: </option>
            <optgroup label="Conditions">
              <option value="1-1">✓</option>
              <option value="1-2">D</option>
              <option value="1-3">M</option>
              <option value="1-4">Mo</option>
              <option value="1-5">Im</option>
              <option value="1-6">Sp</option>
              <option value="1-7">Rf</option>
              <option value="1-8">Un</option>
            </optgroup>
            <optgroup label="Restorations & Prosthetics">
              <option value="2-1">Am</option>
              <option value="2-2">Co</option>
              <option value="2-3">JC</option>
              <option value="2-4">Ab</option>
              <option value="2-5">Att</option>
              <option value="2-6">P</option>
              <option value="2-7">In</option>
              <option value="2-8">Imp</option>
              <option value="2-9">S</option>
              <option value="2-10">Rm</option>
            </optgroup>
            <optgroup label="Surgery">
              <option value="3-1">X</option>
              <option value="3-2">XO</option>
            </optgroup>
          </select>
          <select id="select">
            <option value="" selected>Status: </option>
            <optgroup label="Conditions">
              <option value="1-1">✓</option>
              <option value="1-2">D</option>
              <option value="1-3">M</option>
              <option value="1-4">Mo</option>
              <option value="1-5">Im</option>
              <option value="1-6">Sp</option>
              <option value="1-7">Rf</option>
              <option value="1-8">Un</option>
            </optgroup>
            <optgroup label="Restorations & Prosthetics">
              <option value="2-1">Am</option>
              <option value="2-2">Co</option>
              <option value="2-3">JC</option>
              <option value="2-4">Ab</option>
              <option value="2-5">Att</option>
              <option value="2-6">P</option>
              <option value="2-7">In</option>
              <option value="2-8">Imp</option>
              <option value="2-9">S</option>
              <option value="2-10">Rm</option>
            </optgroup>
            <optgroup label="Surgery">
              <option value="3-1">X</option>
              <option value="3-2">XO</option>
            </optgroup>
          </select>
          <h2>65</h2>
          <img src="imgs/dgchart.svg" class="dchart-box">
        </div>
      </div>
      <div class="chart-container1">
        <div class="dchart">
          <select id="select">
            <option value="" selected>Status: </option>
            <optgroup label="Conditions">
              <option value="1-1">✓</option>
              <option value="1-2">D</option>
              <option value="1-3">M</option>
              <option value="1-4">Mo</option>
              <option value="1-5">Im</option>
              <option value="1-6">Sp</option>
              <option value="1-7">Rf</option>
              <option value="1-8">Un</option>
            </optgroup>
            <optgroup label="Restorations & Prosthetics">
              <option value="2-1">Am</option>
              <option value="2-2">Co</option>
              <option value="2-3">JC</option>
              <option value="2-4">Ab</option>
              <option value="2-5">Att</option>
              <option value="2-6">P</option>
              <option value="2-7">In</option>
              <option value="2-8">Imp</option>
              <option value="2-9">S</option>
              <option value="2-10">Rm</option>
            </optgroup>
            <optgroup label="Surgery">
              <option value="3-1">X</option>
              <option value="3-2">XO</option>
            </optgroup>
          </select>
          <select id="select">
            <option value="" selected>Status: </option>
            <optgroup label="Conditions">
              <option value="1-1">✓</option>
              <option value="1-2">D</option>
              <option value="1-3">M</option>
              <option value="1-4">Mo</option>
              <option value="1-5">Im</option>
              <option value="1-6">Sp</option>
              <option value="1-7">Rf</option>
              <option value="1-8">Un</option>
            </optgroup>
            <optgroup label="Restorations & Prosthetics">
              <option value="2-1">Am</option>
              <option value="2-2">Co</option>
              <option value="2-3">JC</option>
              <option value="2-4">Ab</option>
              <option value="2-5">Att</option>
              <option value="2-6">P</option>
              <option value="2-7">In</option>
              <option value="2-8">Imp</option>
              <option value="2-9">S</option>
              <option value="2-10">Rm</option>
            </optgroup>
            <optgroup label="Surgery">
              <option value="3-1">X</option>
              <option value="3-2">XO</option>
            </optgroup>
          </select>
          <h2>55</h2>
          <img src="imgs/dgchart.svg" class="dchart-box">
        </div>
        <div class="dchart">
          <select id="select">
            <option value="" selected>Status: </option>
            <optgroup label="Conditions">
              <option value="1-1">✓</option>
              <option value="1-2">D</option>
              <option value="1-3">M</option>
              <option value="1-4">Mo</option>
              <option value="1-5">Im</option>
              <option value="1-6">Sp</option>
              <option value="1-7">Rf</option>
              <option value="1-8">Un</option>
            </optgroup>
            <optgroup label="Restorations & Prosthetics">
              <option value="2-1">Am</option>
              <option value="2-2">Co</option>
              <option value="2-3">JC</option>
              <option value="2-4">Ab</option>
              <option value="2-5">Att</option>
              <option value="2-6">P</option>
              <option value="2-7">In</option>
              <option value="2-8">Imp</option>
              <option value="2-9">S</option>
              <option value="2-10">Rm</option>
            </optgroup>
            <optgroup label="Surgery">
              <option value="3-1">X</option>
              <option value="3-2">XO</option>
            </optgroup>
          </select>
          <select id="select">
            <option value="" selected>Status: </option>
            <optgroup label="Conditions">
              <option value="1-1">✓</option>
              <option value="1-2">D</option>
              <option value="1-3">M</option>
              <option value="1-4">Mo</option>
              <option value="1-5">Im</option>
              <option value="1-6">Sp</option>
              <option value="1-7">Rf</option>
              <option value="1-8">Un</option>
            </optgroup>
            <optgroup label="Restorations & Prosthetics">
              <option value="2-1">Am</option>
              <option value="2-2">Co</option>
              <option value="2-3">JC</option>
              <option value="2-4">Ab</option>
              <option value="2-5">Att</option>
              <option value="2-6">P</option>
              <option value="2-7">In</option>
              <option value="2-8">Imp</option>
              <option value="2-9">S</option>
              <option value="2-10">Rm</option>
            </optgroup>
            <optgroup label="Surgery">
              <option value="3-1">X</option>
              <option value="3-2">XO</option>
            </optgroup>
          </select>
          <h2>54</h2>
          <img src="imgs/dgchart.svg" class="dchart-box">
        </div>
        <div class="dchart">
          <select id="select">
            <option value="" selected>Status: </option>
            <optgroup label="Conditions">
              <option value="1-1">✓</option>
              <option value="1-2">D</option>
              <option value="1-3">M</option>
              <option value="1-4">Mo</option>
              <option value="1-5">Im</option>
              <option value="1-6">Sp</option>
              <option value="1-7">Rf</option>
              <option value="1-8">Un</option>
            </optgroup>
            <optgroup label="Restorations & Prosthetics">
              <option value="2-1">Am</option>
              <option value="2-2">Co</option>
              <option value="2-3">JC</option>
              <option value="2-4">Ab</option>
              <option value="2-5">Att</option>
              <option value="2-6">P</option>
              <option value="2-7">In</option>
              <option value="2-8">Imp</option>
              <option value="2-9">S</option>
              <option value="2-10">Rm</option>
            </optgroup>
            <optgroup label="Surgery">
              <option value="3-1">X</option>
              <option value="3-2">XO</option>
            </optgroup>
          </select>
          <select id="select">
            <option value="" selected>Status: </option>
            <optgroup label="Conditions">
              <option value="1-1">✓</option>
              <option value="1-2">D</option>
              <option value="1-3">M</option>
              <option value="1-4">Mo</option>
              <option value="1-5">Im</option>
              <option value="1-6">Sp</option>
              <option value="1-7">Rf</option>
              <option value="1-8">Un</option>
            </optgroup>
            <optgroup label="Restorations & Prosthetics">
              <option value="2-1">Am</option>
              <option value="2-2">Co</option>
              <option value="2-3">JC</option>
              <option value="2-4">Ab</option>
              <option value="2-5">Att</option>
              <option value="2-6">P</option>
              <option value="2-7">In</option>
              <option value="2-8">Imp</option>
              <option value="2-9">S</option>
              <option value="2-10">Rm</option>
            </optgroup>
            <optgroup label="Surgery">
              <option value="3-1">X</option>
              <option value="3-2">XO</option>
            </optgroup>
          </select>
          <h2>53</h2>
          <img src="imgs/dgchart.svg" class="dchart-box">
        </div>
        <div class="dchart">
          <select id="select">
            <option value="" selected>Status: </option>
            <optgroup label="Conditions">
              <option value="1-1">✓</option>
              <option value="1-2">D</option>
              <option value="1-3">M</option>
              <option value="1-4">Mo</option>
              <option value="1-5">Im</option>
              <option value="1-6">Sp</option>
              <option value="1-7">Rf</option>
              <option value="1-8">Un</option>
            </optgroup>
            <optgroup label="Restorations & Prosthetics">
              <option value="2-1">Am</option>
              <option value="2-2">Co</option>
              <option value="2-3">JC</option>
              <option value="2-4">Ab</option>
              <option value="2-5">Att</option>
              <option value="2-6">P</option>
              <option value="2-7">In</option>
              <option value="2-8">Imp</option>
              <option value="2-9">S</option>
              <option value="2-10">Rm</option>
            </optgroup>
            <optgroup label="Surgery">
              <option value="3-1">X</option>
              <option value="3-2">XO</option>
            </optgroup>
          </select>
          <select id="select">
            <option value="" selected>Status: </option>
            <optgroup label="Conditions">
              <option value="1-1">✓</option>
              <option value="1-2">D</option>
              <option value="1-3">M</option>
              <option value="1-4">Mo</option>
              <option value="1-5">Im</option>
              <option value="1-6">Sp</option>
              <option value="1-7">Rf</option>
              <option value="1-8">Un</option>
            </optgroup>
            <optgroup label="Restorations & Prosthetics">
              <option value="2-1">Am</option>
              <option value="2-2">Co</option>
              <option value="2-3">JC</option>
              <option value="2-4">Ab</option>
              <option value="2-5">Att</option>
              <option value="2-6">P</option>
              <option value="2-7">In</option>
              <option value="2-8">Imp</option>
              <option value="2-9">S</option>
              <option value="2-10">Rm</option>
            </optgroup>
            <optgroup label="Surgery">
              <option value="3-1">X</option>
              <option value="3-2">XO</option>
            </optgroup>
          </select>
          <h2>52</h2>
          <img src="imgs/dgchart.svg" class="dchart-box">
        </div>
        <div class="dchart">
          <select id="select">
            <option value="" selected>Status: </option>
            <optgroup label="Conditions">
              <option value="1-1">✓</option>
              <option value="1-2">D</option>
              <option value="1-3">M</option>
              <option value="1-4">Mo</option>
              <option value="1-5">Im</option>
              <option value="1-6">Sp</option>
              <option value="1-7">Rf</option>
              <option value="1-8">Un</option>
            </optgroup>
            <optgroup label="Restorations & Prosthetics">
              <option value="2-1">Am</option>
              <option value="2-2">Co</option>
              <option value="2-3">JC</option>
              <option value="2-4">Ab</option>
              <option value="2-5">Att</option>
              <option value="2-6">P</option>
              <option value="2-7">In</option>
              <option value="2-8">Imp</option>
              <option value="2-9">S</option>
              <option value="2-10">Rm</option>
            </optgroup>
            <optgroup label="Surgery">
              <option value="3-1">X</option>
              <option value="3-2">XO</option>
            </optgroup>
          </select>
          <select id="select">
            <option value="" selected>Status: </option>
            <optgroup label="Conditions">
              <option value="1-1">✓</option>
              <option value="1-2">D</option>
              <option value="1-3">M</option>
              <option value="1-4">Mo</option>
              <option value="1-5">Im</option>
              <option value="1-6">Sp</option>
              <option value="1-7">Rf</option>
              <option value="1-8">Un</option>
            </optgroup>
            <optgroup label="Restorations & Prosthetics">
              <option value="2-1">Am</option>
              <option value="2-2">Co</option>
              <option value="2-3">JC</option>
              <option value="2-4">Ab</option>
              <option value="2-5">Att</option>
              <option value="2-6">P</option>
              <option value="2-7">In</option>
              <option value="2-8">Imp</option>
              <option value="2-9">S</option>
              <option value="2-10">Rm</option>
            </optgroup>
            <optgroup label="Surgery">
              <option value="3-1">X</option>
              <option value="3-2">XO</option>
            </optgroup>
          </select>
          <h2>51</h2>
          <img src="imgs/dgchart.svg" class="dchart-box">
        </div>
        <div class="dchart">
          <select id="select">
            <option value="" selected>Status: </option>
            <optgroup label="Conditions">
              <option value="1-1">✓</option>
              <option value="1-2">D</option>
              <option value="1-3">M</option>
              <option value="1-4">Mo</option>
              <option value="1-5">Im</option>
              <option value="1-6">Sp</option>
              <option value="1-7">Rf</option>
              <option value="1-8">Un</option>
            </optgroup>
            <optgroup label="Restorations & Prosthetics">
              <option value="2-1">Am</option>
              <option value="2-2">Co</option>
              <option value="2-3">JC</option>
              <option value="2-4">Ab</option>
              <option value="2-5">Att</option>
              <option value="2-6">P</option>
              <option value="2-7">In</option>
              <option value="2-8">Imp</option>
              <option value="2-9">S</option>
              <option value="2-10">Rm</option>
            </optgroup>
            <optgroup label="Surgery">
              <option value="3-1">X</option>
              <option value="3-2">XO</option>
            </optgroup>
          </select>
          <select id="select">
            <option value="" selected>Status: </option>
            <optgroup label="Conditions">
              <option value="1-1">✓</option>
              <option value="1-2">D</option>
              <option value="1-3">M</option>
              <option value="1-4">Mo</option>
              <option value="1-5">Im</option>
              <option value="1-6">Sp</option>
              <option value="1-7">Rf</option>
              <option value="1-8">Un</option>
            </optgroup>
            <optgroup label="Restorations & Prosthetics">
              <option value="2-1">Am</option>
              <option value="2-2">Co</option>
              <option value="2-3">JC</option>
              <option value="2-4">Ab</option>
              <option value="2-5">Att</option>
              <option value="2-6">P</option>
              <option value="2-7">In</option>
              <option value="2-8">Imp</option>
              <option value="2-9">S</option>
              <option value="2-10">Rm</option>
            </optgroup>
            <optgroup label="Surgery">
              <option value="3-1">X</option>
              <option value="3-2">XO</option>
            </optgroup>
          </select>
          <h2>61</h2>
          <img src="imgs/dgchart.svg" class="dchart-box">
        </div>
        <div class="dchart">
          <select id="select">
            <option value="" selected>Status: </option>
            <optgroup label="Conditions">
              <option value="1-1">✓</option>
              <option value="1-2">D</option>
              <option value="1-3">M</option>
              <option value="1-4">Mo</option>
              <option value="1-5">Im</option>
              <option value="1-6">Sp</option>
              <option value="1-7">Rf</option>
              <option value="1-8">Un</option>
            </optgroup>
            <optgroup label="Restorations & Prosthetics">
              <option value="2-1">Am</option>
              <option value="2-2">Co</option>
              <option value="2-3">JC</option>
              <option value="2-4">Ab</option>
              <option value="2-5">Att</option>
              <option value="2-6">P</option>
              <option value="2-7">In</option>
              <option value="2-8">Imp</option>
              <option value="2-9">S</option>
              <option value="2-10">Rm</option>
            </optgroup>
            <optgroup label="Surgery">
              <option value="3-1">X</option>
              <option value="3-2">XO</option>
            </optgroup>
          </select>
          <select id="select">
            <option value="" selected>Status: </option>
            <optgroup label="Conditions">
              <option value="1-1">✓</option>
              <option value="1-2">D</option>
              <option value="1-3">M</option>
              <option value="1-4">Mo</option>
              <option value="1-5">Im</option>
              <option value="1-6">Sp</option>
              <option value="1-7">Rf</option>
              <option value="1-8">Un</option>
            </optgroup>
            <optgroup label="Restorations & Prosthetics">
              <option value="2-1">Am</option>
              <option value="2-2">Co</option>
              <option value="2-3">JC</option>
              <option value="2-4">Ab</option>
              <option value="2-5">Att</option>
              <option value="2-6">P</option>
              <option value="2-7">In</option>
              <option value="2-8">Imp</option>
              <option value="2-9">S</option>
              <option value="2-10">Rm</option>
            </optgroup>
            <optgroup label="Surgery">
              <option value="3-1">X</option>
              <option value="3-2">XO</option>
            </optgroup>
          </select>
          <h2>62</h2>
          <img src="imgs/dgchart.svg" class="dchart-box">
        </div>
        <div class="dchart">
          <select id="select">
            <option value="" selected>Status: </option>
            <optgroup label="Conditions">
              <option value="1-1">✓</option>
              <option value="1-2">D</option>
              <option value="1-3">M</option>
              <option value="1-4">Mo</option>
              <option value="1-5">Im</option>
              <option value="1-6">Sp</option>
              <option value="1-7">Rf</option>
              <option value="1-8">Un</option>
            </optgroup>
            <optgroup label="Restorations & Prosthetics">
              <option value="2-1">Am</option>
              <option value="2-2">Co</option>
              <option value="2-3">JC</option>
              <option value="2-4">Ab</option>
              <option value="2-5">Att</option>
              <option value="2-6">P</option>
              <option value="2-7">In</option>
              <option value="2-8">Imp</option>
              <option value="2-9">S</option>
              <option value="2-10">Rm</option>
            </optgroup>
            <optgroup label="Surgery">
              <option value="3-1">X</option>
              <option value="3-2">XO</option>
            </optgroup>
          </select>
          <select id="select">
            <option value="" selected>Status: </option>
            <optgroup label="Conditions">
              <option value="1-1">✓</option>
              <option value="1-2">D</option>
              <option value="1-3">M</option>
              <option value="1-4">Mo</option>
              <option value="1-5">Im</option>
              <option value="1-6">Sp</option>
              <option value="1-7">Rf</option>
              <option value="1-8">Un</option>
            </optgroup>
            <optgroup label="Restorations & Prosthetics">
              <option value="2-1">Am</option>
              <option value="2-2">Co</option>
              <option value="2-3">JC</option>
              <option value="2-4">Ab</option>
              <option value="2-5">Att</option>
              <option value="2-6">P</option>
              <option value="2-7">In</option>
              <option value="2-8">Imp</option>
              <option value="2-9">S</option>
              <option value="2-10">Rm</option>
            </optgroup>
            <optgroup label="Surgery">
              <option value="3-1">X</option>
              <option value="3-2">XO</option>
            </optgroup>
          </select>
          <h2>63</h2>
          <img src="imgs/dgchart.svg" class="dchart-box">
        </div>
        <div class="dchart">
          <select id="select">
            <option value="" selected>Status: </option>
            <optgroup label="Conditions">
              <option value="1-1">✓</option>
              <option value="1-2">D</option>
              <option value="1-3">M</option>
              <option value="1-4">Mo</option>
              <option value="1-5">Im</option>
              <option value="1-6">Sp</option>
              <option value="1-7">Rf</option>
              <option value="1-8">Un</option>
            </optgroup>
            <optgroup label="Restorations & Prosthetics">
              <option value="2-1">Am</option>
              <option value="2-2">Co</option>
              <option value="2-3">JC</option>
              <option value="2-4">Ab</option>
              <option value="2-5">Att</option>
              <option value="2-6">P</option>
              <option value="2-7">In</option>
              <option value="2-8">Imp</option>
              <option value="2-9">S</option>
              <option value="2-10">Rm</option>
            </optgroup>
            <optgroup label="Surgery">
              <option value="3-1">X</option>
              <option value="3-2">XO</option>
            </optgroup>
          </select>
          <select id="select">
            <option value="" selected>Status: </option>
            <optgroup label="Conditions">
              <option value="1-1">✓</option>
              <option value="1-2">D</option>
              <option value="1-3">M</option>
              <option value="1-4">Mo</option>
              <option value="1-5">Im</option>
              <option value="1-6">Sp</option>
              <option value="1-7">Rf</option>
              <option value="1-8">Un</option>
            </optgroup>
            <optgroup label="Restorations & Prosthetics">
              <option value="2-1">Am</option>
              <option value="2-2">Co</option>
              <option value="2-3">JC</option>
              <option value="2-4">Ab</option>
              <option value="2-5">Att</option>
              <option value="2-6">P</option>
              <option value="2-7">In</option>
              <option value="2-8">Imp</option>
              <option value="2-9">S</option>
              <option value="2-10">Rm</option>
            </optgroup>
            <optgroup label="Surgery">
              <option value="3-1">X</option>
              <option value="3-2">XO</option>
            </optgroup>
          </select>
          <h2>64</h2>
          <img src="imgs/dgchart.svg" class="dchart-box">
        </div>
        <div class="dchart">
          <select id="select">
            <option value="" selected>Status: </option>
            <optgroup label="Conditions">
              <option value="1-1">✓</option>
              <option value="1-2">D</option>
              <option value="1-3">M</option>
              <option value="1-4">Mo</option>
              <option value="1-5">Im</option>
              <option value="1-6">Sp</option>
              <option value="1-7">Rf</option>
              <option value="1-8">Un</option>
            </optgroup>
            <optgroup label="Restorations & Prosthetics">
              <option value="2-1">Am</option>
              <option value="2-2">Co</option>
              <option value="2-3">JC</option>
              <option value="2-4">Ab</option>
              <option value="2-5">Att</option>
              <option value="2-6">P</option>
              <option value="2-7">In</option>
              <option value="2-8">Imp</option>
              <option value="2-9">S</option>
              <option value="2-10">Rm</option>
            </optgroup>
            <optgroup label="Surgery">
              <option value="3-1">X</option>
              <option value="3-2">XO</option>
            </optgroup>
          </select>
          <select id="select">
            <option value="" selected>Status: </option>
            <optgroup label="Conditions">
              <option value="1-1">✓</option>
              <option value="1-2">D</option>
              <option value="1-3">M</option>
              <option value="1-4">Mo</option>
              <option value="1-5">Im</option>
              <option value="1-6">Sp</option>
              <option value="1-7">Rf</option>
              <option value="1-8">Un</option>
            </optgroup>
            <optgroup label="Restorations & Prosthetics">
              <option value="2-1">Am</option>
              <option value="2-2">Co</option>
              <option value="2-3">JC</option>
              <option value="2-4">Ab</option>
              <option value="2-5">Att</option>
              <option value="2-6">P</option>
              <option value="2-7">In</option>
              <option value="2-8">Imp</option>
              <option value="2-9">S</option>
              <option value="2-10">Rm</option>
            </optgroup>
            <optgroup label="Surgery">
              <option value="3-1">X</option>
              <option value="3-2">XO</option>
            </optgroup>
          </select>
          <h2>65</h2>
          <img src="imgs/dgchart.svg" class="dchart-box">
        </div>
      </div>
      <div class="box-chart">
        <div class="row-chart">
          <div class="container-table">
            <table>
              <tr>
                <th>Legends</th>
                <th>Condition</th>
                <th>Restoration and Prosthetics</th>
                <th>Surgery</th>
              </tr>
              <tr>
                <td></td>
                <td><b>✓</b> Present Teeth</td>
                <td><b>AM</b> Amaigam Filling</td>
                <td><b>X</b> Extraction Due to Caries</td>
              </tr>
              <tr>
                <td></td>
                <td><b>D</b> Decayed</td>
                <td><b>CO</b> Composite Filling</td>
                <td><b>XO</b> Extraction Due to Other Causes</td>
              </tr>
              <tr>
                <td></td>
                <td><b>M</b> Missing Due to Caries</td>
                <td><b>JC</b> Jacket Crown</td>
              </tr>
              <tr>
                <td></td>
                <td><b>MO</b> Missing due to other causes</td>
                <td><b>Ab</b> Abutment</td>
              </tr>
              <tr>
                <td></td>
                <td><b>IM</b> Impacted Tooth</td>
                <td><b>Att</b> Attachment</td>
              </tr>
              <tr>
                <td></td>
                <td><b>Sp</b> Supernumerary Tooth</td>
                <td><b>P</b> Pontic</td>
              </tr>
              <tr>
                <td></td>
                <td><b>Rf</b> Root Fragment</td>
                <td><b>In</b> Inlay</td>
              </tr>
              <tr>
                <td></td>
                <td><b>Un</b> Unerupted</td>
                <td><b>Imp</b> Implant</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td><b>S</b> Sealants</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td><b>Rm</b> Removable Denture </td>
              </tr>
          </div>
        </div>
        <!---------end-of-pending booking---------->

      </div>

      </body>

</html>