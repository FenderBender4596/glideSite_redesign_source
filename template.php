<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Oswald|Raleway:500" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" type="text/css" href="normalize.css" />
</head>
<body>
<div id="wrapper">
    <div id="main">

    <div id="header">
    <div id="logo">
     <a id="home" class="web_logo" href="index.php"> 
     <object class="header_logo" data="images/header_logo.svg" type="image/svg+xml">
		<img src="images/header_logo.png" alt="logo">
	 </object>
     </a>
     <img class="mobile_logo"src="images/mobile_logo_header.png">
    </div>
        <div class="head_menu">
        <a href="about.php">About</a>
        <a href="publications.php">Publications</a>
        <a href="contact.php">Contact</a>
        <a href="projects.php">Projects</a>
    </div>
    <div class="mobile-menu">
        <a  class="dropdown-link">EXPLORE</a>
        <ul class="mobile-dropdown">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="publications.php">Publications</a></li>
        <li><a href="projects.php">Projects</a></li>
        <li><a href="team.php">Current</a></li>
        <li><a href="withUs.php">Work With Us</a></li>
        <li><a href="contact.php">Contact</a></li>
        </ul>
    </div>
    </div>

    <div id="templateTitle">
    <h1>Template Title</h1>
    </div>

    <div id="templatePage">

    <div id="templatePicWeb">
    <img src="http://via.placeholder.com/350x350">
    </div>

    <!-- <div id="templatePicPhone">
    <img src="http://via.placeholder.com/250x250">
    </div> -->

    <div id="templateInfo">
    <?php
    $person = [
    "first_name" => "Homer",
    "last_name" => "Simpson",
    "address" => "742 Evergreen Terrace",
    "city" => "Springfield"
    ];
    foreach ($person as $attribute => $data) {
    $attr_nice = ucwords(str_replace("_", " ", $attribute));
    echo "<b>{$attr_nice}</b>: {$data}<br>";
    }
    ?>
    </div>

    <div id="templateDesc">
    <p>"this would be an overview of our message at glide, and the very first thing that people would read. It has to
    be about what this company represents, and what we do at glide that makes us unique and special. Maybe a quote from
    Doctor Foster's papers mayhaps, or something here that we could stylize it and make an image of it in this box.</p>

    <p>"this would be an overview of our message at glide, and the very first thing that people would read. It has to
    be about what this company represents, and what we do at glide that makes us unique and special. Maybe a quote from
    Doctor Foster's papers mayhaps, or something here that we could stylize it and make an image of it in this box.</p>

    <p>"this would be an overview of our message at glide, and the very first thing that people would read. It has to
    be about what this company represents, and what we do at glide that makes us unique and special. Maybe a quote from
    Doctor Foster's papers mayhaps, or something here that we could stylize it and make an image of it in this box.</p>

    <p>"this would be an overview of our message at glide, and the very first thing that people would read. It has to
    be about what this company represents, and what we do at glide that makes us unique and special. Maybe a quote from
    Doctor Foster's papers mayhaps, or something here that we could stylize it and make an image of it in this box.</p>
    </div>
    </div>
      
    </div> 
</div> 
<!-- <div id="footer">
<p>Copyright © 2018 GLIDE Lab. All rights reserved</p>
</div>  -->
<script src="js/jquery-3.3.1.js" type="text/javascript"></script> 
<script src="main.js"></script>
</body>
</html>