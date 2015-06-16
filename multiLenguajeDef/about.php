<?php
include_once 'common.php';
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?php echo $lang['TITLE_ABOUT']; ?></title>
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
      <a href="about.php?lang=en">
      English <img src="img/uk.png" widht="75" height="25" alt="English"/>
      </a>
      <a href="about.php?lang=sp">
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
        <li><a href="about.php" style="color:#ffff99"><?php echo $lang['MENU_ABOUT_US']; ?>
          <img src="img/dot.png" alt="dot icon" style="width:5px;height:5px;align:center"/></a>
        </li>
        <li><a href="services.php"><?php echo $lang['MENU_SERVICES']; ?></a></li>
        <li><a href="research.php"><?php echo $lang['MENU_RESEARCH']; ?></a></li>
        <li><a href="work.php"><?php echo $lang['MENU_WORK']; ?></a></li>
        <li>
          <a href="contact.php">
            <img src="img/mailB.png" alt="mail Icon" style="width:25px;height:25px" onmouseover="this.src='img/mailH.png';" onmouseout="this.src='img/mailB.png';" />
          </a>
        </li>
    </ul>
  </nav>

<!-- Articulo Secundario -->
  <div id="secondary-content">
    <div class="wrapper">
    <article>
      <h1><?php echo $lang['ABOUT_HEADING']; ?></h1>
      <p><?php echo $lang['ABOUT_FIRST']; ?></p>
      <p><?php echo $lang['ABOUT_SECOND']; ?></p>
      <p><?php echo $lang['ABOUT_THIRD']; ?></p>
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
