<?php
require 'includes/data.php';
?>

<!DOCTYPE html>
<html lang="en-us">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Mehdi Saadi">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="includes/profile-style.css">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <title>introduction</title>
</head>
<body>
<!-- sidebar -->
<div class="sidebar">
  <img src="includes/photo3.jpg" alt="My Second Image" class="photo3 display">
  <a href="#" class="active a"><i class="fa fa-home w3-xxlarge display"></i><p>HOME</p></a>
  <a href="#about" class="a"><i class="fa fa-user w3-xxlarge display"></i><p>ABOUT</p></a>
  <a href="#contact" class="a"><i class="fa fa-envelope w3-xxlarge display"></i><p>CONTACT</p></a>
</div>
<!-- content -->
<div class="content">
  <h1 class="center">I'm Mehdi Saadi.</h1>
  <p class="center">Web Developer.</p>
  <img src="includes/photo2.jpg" alt="My Image" class="photo2">
  <div><br><br id="about"><br></div>

  <div class="content2">

    <h2>My Name</h2>
    <hr>
    <p><?php
      if ($rowCount_m > 0) {
        $row_m = mysqli_fetch_assoc($result_m);
        echo $row_m['content'] . "<br>";
      } else {
        echo "No results found!";
      }
    ?>
    </p>
    <h2>My Skills</h2>
    <p>PHP</p>
    <div class="white-color">
      <div style="background-color: #363636; height: 26px; width: <?php if ($rowCount_s > 0) {
      $row_s = mysqli_fetch_assoc($result_s);
      echo $row_s['php'];
      }
      ?>%;"></div>
    </div>
    <p>Laravel</p>
    <div class="white-color">
      <div style="background-color: #363636; height: 26px; width: <?php echo $row_s['laravel'];?>%;"></div>
    </div>
    <p>HTML</p>
    <div class="white-color">
      <div style="background-color: #363636; height: 26px; width: <?php echo $row_s['html'];?>%;"></div>
    </div>
    <p>CSS</p>
    <div class="white-color">
      <div style="background-color: #363636; height: 26px; width: <?php echo $row_s['css'];?>%;"></div>
    </div>
    <p>BOOTSTRAP</p>
    <div class="white-color">
      <div style="background-color: #363636; height: 26px; width: <?php echo $row_s['bs'];?>%;"></div>
    </div>
    <p>JavaScript</p>
    <div class="white-color">
      <div style="background-color: #363636; height: 26px; width: <?php echo $row_s['js'];?>%;"></div>
    </div>
    <p>Jquery</p>
    <div class="white-color">
      <div style="background-color: #363636; height: 26px; width: <?php echo $row_s['jquery'];?>%;"></div>
    </div>
    <p>MySQL</p>
    <div class="white-color">
      <div style="background-color: #363636; height: 26px; width: <?php echo $row_s['mysql'];?>%;"></div>
    </div><br><br>

    <table class="t-color">
      <tr>
        <td class="f-size">
          <?php
          if ($rowCount_p > 0) {
            $row_p = mysqli_fetch_assoc($result_p);
            echo $row_p['projects'];
          } else {
            echo "No results found!";
          }
          ?>+
        </td>
        <td></td>
        <td class="f-size">
          <?php
            echo $row_p['clients'];
          ?>+
        </td>
      </tr>
      <tr>
        <td>Projects Done</td>
        <td></td>
        <td>Happy Clients</td>
      </tr>
    </table><br><br><br>

    <a href="photo2.jpg" class="d-button" download><i class="fa fa-download"></i> Download Resume</a><br><br><br>

    <div><br id="contact"><br></div>

    <h2>Contact Me</h2>
    <hr>
    <p><i class="fa fa-map-marker w3-xxlarge w3-margin-right fa-fw"></i>
    <?php 
    if ($rowCount_c > 0) {
      $row_c = mysqli_fetch_assoc($result_c);
      echo $row_c['location'];
    } else {
      echo "No results found!";
    }
    ?>
    </p>
    <p><i class="fa fa-phone w3-xxlarge w3-margin-right fa-fw"></i><?php echo $row_c['phone'];?></p>
    <p><i class="fa fa-envelope w3-xxlarge w3-margin-right fa-fw"></i><?php echo $row_c['email'];?></p>
    <a href="<?php echo $row_c['instagram'];?>" class="i-hover"  target="_blank"><i class="fa fa-instagram w3-xxlarge w3-margin-right fa-fw"></i></a>
    <a href="<?php echo $row_c['linkedin'];?>" class="i-hover"  target="_blank"><i class="fa fa-linkedin w3-xxlarge w3-margin-right fa-fw"></i></a>
    <br><br>

    <p>Let's get in touch. Send me a message:</p>
    <form action="includes/message.php" method="post">
      <input type="text" name="name" placeholder="Name" class="input" required><br><br>
      <input type="email" name="email" placeholder="Your Email Address" class="input" required><br><br>
      <input type="text" name="subject" placeholder="Subject" class="input" required><br><br>
      <input type="text" name="message" placeholder="Message" class="input" required><br><br>
      <button type="submit" name="submit" class="d-button">SEND MESSAGE</button>
    </form>

  </div>

  <br>
  <br>
  <br>
  <br>
  <br>
  <br>

  <footer class="content2">
    <p>Author: Mehdi Saadi<br><br>
    </p>
  </footer>
</div>

</body>
</html>
