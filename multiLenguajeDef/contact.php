<?php
include_once 'common.php';
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?php echo $lang['TITLE_CONTACT']; ?></title>
    <link rel="stylesheet" href="css/mystyle.css">
    <link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" type="image/x-icon" href="img/circles.png">

<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body>

  <!-- Menú de lenguaje -->
  <p style="text-align:right;color:#003366;margin-right:10%">
      <a href="contact.php?lang=en">
      English <img src="img/uk.png" widht="75" height="25" alt="English"/>
      </a>
      <a href="contact.php?lang=sp">
      Español <img src="img/sp.png" widht="75" height="25" alt="Español"/>
      </a>
  </p>

  <!-- Cabecera Telcaria y Texto -->
  <a href="index.php">
  <header>
    <h1>
      Fostering the vendor-neutral and<br>standard-based mobile Internet
    </h1>
  </header>
</a>

  <!-- Menú de navegación -->
  <nav>
    <ul>
        <li>
          <a href="index.php">
            <img src="img/homeB.png" alt="Home Icon" style="width:25px;height:25px" onmouseover="this.src='img/homeH.png';" onmouseout="this.src='img/homeB.png';" />
          </a>
        </li>
        <!-- MENU_ABOUT_US -->
        <li><a href="about.php"><?php echo $lang['MENU_ABOUT_US']; ?></a></li>
        <!-- MENU_SERVICES -->
        <li><a href="services.php"><?php echo $lang['MENU_SERVICES']; ?></a></li>
        <!-- MENU_RESEARCH -->
        <li><a href="research.php"><?php echo $lang['MENU_RESEARCH']; ?></a></li>
        <!-- MENU_WORK -->
        <li><a href="work.php"><?php echo $lang['MENU_WORK']; ?></a></li>
        <li>
          <a href="contact.php">
            <img src="img/mailH" alt="Contact Icon" style="width:25px;height:25px"/>
            <img src="img/dot.png" alt="dot icon" style="width:5px;height:5px;align:center"/>
          </a>
        </li>
    </ul>
  </nav>

<!-- Articulo Secundario -->
<div id="secondary-content">
  <!-- Here we are -->
  <div class="wrapper">
    <article>
      <h1><?php echo $lang['CONTACT_TITLE']; ?></h1>
      <pre>
        Telcaria Ideas SL
        Calle Barrionuevo 8, Local 1
        28911, Leganés (Madrid)
        <?php echo $lang['SPAIN']; ?>
      </pre>
    <p>Email: <a href="mailto:info@telcaria.com?subject=feedback">info@telcaria.com</a></p>
    </article>
  </div>

  <!-- Contact uS -->
<div class="wrapper">
  <div class="wrap">
    <div class="contact-div">
      <h1 class="contact-heading"><?php echo $lang['CONTACT_US_TITLE']; ?></h1>
      <div class="sepreater"></div>
    </div>
    <p class="contact-para"><?php echo $lang['CONTACT_FIRST']; ?></p>
    <div class="w-form">
        <form action="contactForm.php" method="post">
          <label for="name"><p style="align:left"><?php echo $lang['FORM_NAME'];?></p></label>
            <input class="w-input" type="text" style="width:100%" placeholder="<?php echo $lang['PHLDR_NAME'];?>" name="cf_name">
            <br>
              <label for="email"><p style="align:left"><?php echo $lang['FORM_ADDRESS']; ?></p></label>
              <input class="w-input" style="width:100%" placeholder="<?php echo $lang['PHLDR_MAIL'];?>" type="text" name="cf_email" required="required">
              <br>
              <label for="email"><p style="align:left"><?php echo $lang['FORM_MSG']; ?></p></label>
              <textarea class="w-input message" style="width:100%;height:50%"placeholder="<?php echo $lang['PHLDR_MSG'];?>" name="cf_message"></textarea><br>

              <input class="w-button" type="submit" value="Send">
            </form>
    </div>
  </div>
</div>
</div>

<div id="secondary-content">
  <div class="wrapper">
    <article>
      <h1><?php echo $lang['CONTACT_MAP']; ?></h1>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3041.5961217362624!2d-3.7685379000000174!3d40.32912020000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd418a20a97653cb%3A0x8d135ec73595b7a3!2sCalle+de+Barrionuevo%2C+8!5e0!3m2!1ses!2ses!4v1434352697849" width="100%" height="450" frameborder="0" style="border:0"></iframe>
  </article>
  </div>
</div>


  <footer>
    <div id="footer-info">
      <small> Copyright 2015 &copy; Telcaria Ideas S.L.</small>
    </div>
    <div id="footer-links">
      <ul align="right">
        <li>
        <a href="https://twitter.com/telcaria" target="_blank">
        <img src='img/twitterFoot.png' align="right" width='20' height='20' onmouseover="this.src='img/twitterFootH.png';" onmouseout="this.src='img/twitterFoot.png';" />
        </a>
      </li>
      <li>
        <a href="https://www.linkedin.com/company/telcaria-ideas-sl?trk=biz-companies-cym" target="_blank">
          <img src='img/likendinFoot.png' align="center" width='20' height='20' onmouseover="this.src='img/likendinFootH.png';" onmouseout="this.src='img/likendinFoot.png';" />
        </a>
      </li>
      </ul>
    </div>
  </footer>




  </body>
  </html>
