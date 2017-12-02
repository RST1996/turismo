<?php
?>
<html>
<head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="assets/js/materialize.min.js"></script>
<body>
<div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper">
        <a href="index.php" class="brand-logo">Logo</a>
        <ul class="right hide-on-med-and-down">
          <li><a href="index.php">Home</a></li>
          <li><a href="#places">places</a></li>
          <li><a href="#contact_us">Contact Us</a></li>
        </ul>
      </div>
    </nav>
  </div>
  <div class="slider" style="height:450px;">
    <ul class="slides">
      <li>
        <img src="assets/images/rajasthantourism_01.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>Welcome to Rajasthan Tourism</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="assets/images/bg-01.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h3>Left Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="assets/images/bg-02.jpg"> <!-- random image -->
        <div class="caption right-align">
          <h3>Right Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="https://lorempixel.com/580/250/nature/4"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
    </ul>
  </div>
  <div class="row">
    <form>
  
    </form>
  </div>
  

    <script> 
        $(document).ready(function(){
      $('.slider').slider();
    });
        
    </script>    
</body>
</html>