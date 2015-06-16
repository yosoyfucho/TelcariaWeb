<?php
include_once 'common.php';
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- TITLE_HOME -->
    <title><?php echo $lang['TITLE_HOME']; ?></title>
    <link rel="stylesheet" href="css/mystyle.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/circles.png">

<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="js/coin-slider.js"></script>
<link rel="stylesheet" href="css/coin-slider-styles.css" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>


</head>

<body>

  <!-- Menú de lenguaje -->
  <p style="text-align:right;color:#003366;margin-right:10%">
      <a href="index.php?lang=en">
      English <img src="img/uk.png" widht="75" height="25" alt="English"/>
      </a>
      <a href="index.php?lang=sp">
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
            <img src="img/homeH.png" alt="Home Icon" style="width:25px;height:25px"/>
            <img src="img/dot.png" alt="dot icon" style="width:5px;height:5px;align:center"/>
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
            <img src="img/mailB.png" alt="Home Icon" style="width:25px;height:25px" onmouseover="this.src='img/mailH.png';" onmouseout="this.src='img/mailB.png';" />
          </a>
        </li>
    </ul>
  </nav>

  <!-- Probando desde aquí-->


  <div id="main-content">
  	<div class="wrapper1">
      <article>
          <div id="carr">

            <img src="img/imgsCarr/resized/r1.png" alt="Router 1" />
              <span>
                <b><?php echo $lang['MENU_ABOUT_US'];?></b><br />
                <?php echo $lang['SLIDE_ABOUT'];?>
                <a href="about.php"><?php echo $lang['SLIDE_LEARN'];?> ⊕</a>
              </span>


              <img src="img/imgsCarr/resized/r2.png" alt="Router 2" />
              <span>
                <b><?php echo $lang['MENU_SERVICES'];?></b><br />
                <?php echo $lang['SLIDE_SERVICES'];?>
                <a href="services.php"><?php echo $lang['SLIDE_LEARN'];?> ⊕</a>
              </span>

              <img src="img/imgsCarr/resized/r3.png" alt="Router 3" />
              <span>
                <b><?php echo $lang['MENU_RESEARCH'];?></b><br />
                <?php echo $lang['SLIDE_RESEARCH'];?>
                <a href="research.php"><?php echo $lang['SLIDE_LEARN'];?> ⊕</a>
              </span>
              <img src="img/imgsCarr/resized/r4.png" alt="Router 3" />
              <span>
                <b><?php echo $lang['MENU_WORK'];?></b><br />
                <?php echo $lang['SLIDE_WORK'];?>
                <a href="work.php"><?php echo $lang['SLIDE_LEARN'];?> ⊕</a>
              </span>
        </div> <!-- carr -->
    </article >
    </div>
    <div class="wrapper2" style="width:200pxs;background-color:none;background-image:url(img/circles.png);
      background-position:top;
      background-size:70%;
      background-repeat:no-repeat;">
      <article>
        <h4 style="text-align:center;font-family:Helvetica;color:white">Social Media</h4>
          <p style="text-align:center">
            <a href="https://twitter.com/telcaria" target="_blank">
            <img src='img/twitter.png' width='70' height='60' onmouseover="this.src='img/twitterH.png';" onmouseout="this.src='img/twitter.png';" />
            </a>

            <a href="https://www.linkedin.com/company/telcaria-ideas-sl?trk=biz-companies-cym" target="_blank">
              <img src='img/linkedin.png' width='70' height='60' onmouseover="this.src='img/linkedinH.png';" onmouseout="this.src='img/linkedin.png';" />
            <br><br/>
            <a class="twitter-timeline" href="https://twitter.com/telcaria" data-widget-id="601286987409203200">
              Tweets por el @telcaria.
            </a>
            </a>
          </p>
      </article>

    </div>
  </div>


  <!-- Probando hasta aquí -->

  <!-- Contenido principal -->

<!-- Para separar contenido -->
  <div class="clear"></div>
<!-- Contenido  Scundario -->
<div id="secondary-content">
	<div class="wrapper">
		<article>

        <h1><?php echo $lang['HOME_HEADING']; ?></h1>
        <p><?php echo $lang['HOME_FIRST']; ?></p>
        <p><?php echo $lang['HOME_SECOND']; ?></p>
        <ul>
          <li><?php echo $lang['HOME_SECOND_UL_1'];?></li>
          <li><?php echo $lang['HOME_SECOND_UL_2'];?></li>
        </ul>
        <p><?php echo $lang['HOME_THIRD'];?></p>
        <p><?php echo $lang['HOME_FOURTH'];?></p>
        <p><?php echo $lang['HOME_FIFTH'];?></p>
        <p>
          <img class="right" src="img/home1.jpg" alt="Handshake"/>
          <ul>
            <li><?php echo $lang['HOME_FIFTH_UL_1'];?></li>
            <li><?php echo $lang['HOME_FIFTH_UL_2'];?></li>
            <li><?php echo $lang['HOME_FIFTH_UL_3'];?></li>
            <li><?php echo $lang['HOME_FIFTH_UL_4'];?></li>
          </ul>
        </p >
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
  <script>
    $('#carr').coinslider();
  </script>
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

  </body>
  </html>
