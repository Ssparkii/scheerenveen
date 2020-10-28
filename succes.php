<?php include('server.php');

if (empty($_SESSION['succes'])) {
    header('location: contact.php');
}

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="contact.css">
        <link rel="stylesheet" type="text/css" href="header.css">
        <link rel="stylesheet" type="text/css" href="footer.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" >
        <title>contact</title>
    </head>
    <body>
    <div class="header">
            <div class="heerenveen">
                <img src="images/heerenveen-logo.png" alt="logo" class="foto">
                <div class="logo-text">
                SC Heerenveen
                </div>
                <a href="#">
                <div class="sponsoren">
                    <img src="images/Ausnutria-logo.png" alt="hoofdsponsor" class="foto-hoofdsponsor">
                </div>
                </a>
            </div>
            <div class="background">
            <div class="nav">
                <div class="index">NAVIGATIE</div>
                <a href="#">HOME</a>
                <a href="#">WEDSTRIJDEN</a>
                <a href="#">SPELERS</a>
                <a href="#">BIER</a>
                <a href="#">TICKETS</a>
                <a href="#">SPONSOREN</a>
                <a href="#">BESTUUR</a>
                <a href="#">OVER ONS</a>
                <a href="#">CONTACT</a>
            </div>
            </div>
        </div>
        <div class="box">
            <div class="contact-info-succes p-succes">
            <p>
            kies hier een manier om met ons in contact te komen.<br>
            U kunt het formulier invullen, maar ook rechtstreeks bellen of 
            mailen
            </p> <br>
            <br>
            <p class="info-big">
            contact informatie:
            </p>
            <br>
            <p>
            e-mail: placeholder@email.com<br>
            telefoon: 0514-415131<br>
            plaats: Heerenveen
            </p>
            <?php if (isset($_SESSION['succes'])): ?>
            <div class="succes">
                <h3>
                    <?php
                    echo $_SESSION['succes'];
                    unset($_SESSION['succes']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
            </div>
        </div>
        <footer>
      <div class="mapouter">
        <div class="gmap_canvas">
          <iframe
            width="100%"
            height="300"
            id="gmap_canvas"
            src="https://maps.google.com/maps?q=abe%20lenstra%20&t=&z=13&ie=UTF8&iwloc=&output=embed"
            frameborder="0"
            scrolling="no"
            marginheight="0"
            marginwidth="0"
          ></iframe>
        </div>
      </div>
      <div class="contactGegevens">
        <h2>Contact</h2>
        <p>
          Email: 
          <br>
          placeholder@email.com
          <br>
          <br />
          Telefoon: 
          <br>
          0515-415131 
          <br>
          <br />
          Plaats:
          <br>
           Heerenveen
        </p>
      </div>
      <div class="volgendeWedstrijd">
        <h2>Volgende Wedstrijd</h2>
        <p>
          <?php
            echo "23 December 2020
            <br />
            14:00
            <br />
            Sc Heerenveen - Feyenoord
            <br>
            <img class='firstLogo' src='https://upload.wikimedia.org/wikipedia/en/thumb/e/e1/SC_Heerenveen_logo.svg/1200px-SC_Heerenveen_logo.svg.png' alt='SC Heerenveen logo'><img class='secondLogo' src='https://upload.wikimedia.org/wikipedia/en/thumb/e/e3/Feyenoord_logo.svg/1200px-Feyenoord_logo.svg.png' alt='Feyenoord logo'>"
          ?>
        </p>
      </div>
    </footer>
    </body>
</html>