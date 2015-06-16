<?php
include_once 'common.php';
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?php echo $lang['TITLE_SERVICES']; ?></title>
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
      <a href="services.php?lang=en">
      English <img src="img/uk.png" widht="75" height="25" alt="English"/>
      </a>
      <a href="services.php?lang=sp">
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
        <li><a href="about.php"><?php echo $lang['MENU_ABOUT_US']; ?></a></li>
        <li><a href="services.php" style="color:#ffff99"><?php echo $lang['MENU_SERVICES']; ?>
          <img src="img/dot.png" alt="dot icon" style="width:5px;height:5px;align:center"/></a>
        </li>
        <li><a href="research.php"><?php echo $lang['MENU_RESEARCH']; ?></a></li>
        <li><a href="work.php"><?php echo $lang['MENU_WORK']; ?></a></li>
        <li>
          <a href="contact.php">
            <img src="img/mailB.png" alt="Home Icon" style="width:25px;height:25px" onmouseover="this.src='img/mailH.png';" onmouseout="this.src='img/mailB.png';" />
          </a>
        </li>
    </ul>
  </nav>

<!-- Articulo Secundario -->
<div id="secondary-content">
	<div class="wrapper">
		<article>
        <h1><a id="Services" style="font-family:'Crete Round'"><?php echo $lang['SERVICES_TITLE']; ?></a></h1>
        <p><?php echo $lang['SERVICES_FIRST']; ?></p>
        <p><?php echo $lang['SERVICES_SECOND']; ?></p>

  </article>
  </div>
  <div class="wrapper">
    <article>
      <ul><h3><a href="#Open"><?php echo $lang['SERVICES_OSNV']; ?></a></h3>
        <li><?php echo $lang['SERVICES_OSNV_UL_1']; ?></li>
        <li><?php echo $lang['SERVICES_OSNV_UL_2']; ?></li>
        <li><?php echo $lang['SERVICES_OSNV_UL_3']; ?></li>
      </ul>

    </article>

    <article>
      <ul><h3><a href="#Internet"><?php echo $lang['SERVICES_IS']; ?></a></h3>
        <li><?php echo $lang['SERVICES_IS_UL_1']; ?></li>
        <li><?php echo $lang['SERVICES_IS_UL_2']; ?></li>
        <li><?php echo $lang['SERVICES_IS_UL_3']; ?></li>
        <li><?php echo $lang['SERVICES_IS_UL_4']; ?></li>
      </ul>

    </article>

    <article>
      <ul><h3><a href="#Wireless"><?php echo $lang['SERVICES_WIRELESS']; ?></a></h3>
        <li><?php echo $lang['SERVICES_WIRELESS_UL_1']; ?></li>
        <li><?php echo $lang['SERVICES_WIRELESS_UL_2']; ?></li>
        <li><?php echo $lang['SERVICES_WIRELESS_UL_3']; ?></li>
      </ul>

    </article>

    <article>
      <ul><h3><a href="#Web"><?php echo $lang['SERVICES_WEBTECH']; ?></a></h3>
        <li><?php echo $lang['SERVICES_WEBTECH_UL_1']; ?></li>
        <li><?php echo $lang['SERVICES_WEBTECH_UL_2']; ?></li>
      </ul>
    </article>
  </div>
</div>

  <!-- Organizando desde  aquí -->
  <div id="secondary-content" style="background-color:none"><div class="clear"></div></div>

  <div id="secondary-content" style="background-image:none"><div class="clear"></div></div>
  <!-- Hasta aquí -->

  <div id="secondary-content">
  	<div class="wrapper">
      <article>
      <p>
        <img class="right" src="img/services1.png" alt="lan"/>
        <ul>
          <h2><a id="Open"><?php echo $lang['OSNV']; ?></a></h2>
            <li> <?php echo $lang['OSNV_UL_1']; ?> <br>
				<ul>
                <li><?php echo $lang['OSNV_UL_UL_1']; ?></li>
                <li><?php echo $lang['OSNV_UL_UL_2']; ?></li>
                <li><?php echo $lang['OSNV_UL_UL_3']; ?></li>
                <li><?php echo $lang['OSNV_UL_UL_4']; ?></li>
              </ul>
				  <ul>
            <li> <?php echo $lang['OSNV_UL_2']; ?> <br>
				  </ul>
                </li>
				</ul>
            </li>
            <li> <?php echo $lang['OSNV_UL_3']; ?> <br>
            <li> <?php echo $lang['OSNV_UL_4']; ?> <br>
        </ul>
      </p>
      <a href="#Services"><img src="img/up.png" alt="up Icon" style="width:25px;height:25px" onmouseover="this.src='img/upH.png';" onmouseout="this.src='img/up.png';" /></a>

    </article>
  </div>
</div>

<!-- Organizando desde  aquí -->
<div id="secondary-content" style="background-color:none"><div class="clear"></div></div>

<div id="secondary-content" style="background-image:none"><div class="clear"></div></div>
<!-- Hasta aquí -->

<div id="secondary-content">
	<div class="wrapper">
    <article>
      <p>
        <img class="right" src="img/services2.jpg" alt="lan"/>
        <h2><a id="Internet"><?php echo $lang['IS']; ?></a></h2>
        <p><?php echo $lang['IS_FIRST']; ?></p>
      </p>
      <a href="#Services"><img src="img/up.png" alt="up Icon" style="width:25px;height:25px" onmouseover="this.src='img/upH.png';" onmouseout="this.src='img/up.png';" /></a>

    </article>
  </div>
</div>

<!-- Organizando desde  aquí -->
<div id="secondary-content" style="background-color:none"><div class="clear"></div></div>

<div id="secondary-content" style="background-image:none"><div class="clear"></div></div>
<!-- Hasta aquí -->

<div id="secondary-content">
	<div class="wrapper">
    <article>
      <p>
        <img class="right" src="img/services3.png" alt="lan"/>
        <h2> <a id="Wireless"><?php echo $lang['WN']; ?></a></h2>
        <p><?php echo $lang['WN_FIRST']; ?></p>
      </p>
      <a href="#Services"><img src="img/up.png" alt="up Icon" style="width:25px;height:25px" onmouseover="this.src='img/upH.png';" onmouseout="this.src='img/up.png';" /></a>

    </article>
</div>
</div>

<!-- Organizando desde  aquí -->
<div id="secondary-content" style="background-color:none"><div class="clear"></div></div>

<div id="secondary-content" style="background-image:none"><div class="clear"></div></div>
<!-- Hasta aquí -->

<div id="secondary-content">
	<div class="wrapper">
    <article>

      <p>
        <img class="right" src="img/services4.jpg" alt="lan"/>
        <h2><a id="Web"><?php echo $lang['WEBT']; ?></a></h2>
        <p><?php echo $lang['WEBT_FIRST']; ?></p>
      </p>
      <a href="#Services"><img src="img/up.png" alt="up Icon" style="width:25px;height:25px" onmouseover="this.src='img/upH.png';" onmouseout="this.src='img/up.png';" /></a>
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
