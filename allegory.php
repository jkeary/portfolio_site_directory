<?php 
  require_once('header.php');
  include_once("analyticstracking.php"); 
  define('PAGE', '');
  include_once("navbar.php");
?>
<body>
  <div id="wrap">
    <div class="container">
      <div class="page-header-custom">
        <h1 class="text-left"><a href="./videographer.php" data-toggle="tooltip" data-placement="bottom" title="back to video page"><span class="glyphicon glyphicon-facetime-video"></span></a> An Allegory</h1>
      </div>
      <p class="lead_md">Puppetry, greenscreens, and life lessons.  Final Project for Advanced Video Editing 2006, Oberlin College.</p>
      <video width="65%" height="auto" class="center_video" controls>
        <source src="./video/An_Allegory_640x480px_SD.mp4" type="video/mp4">
        <source src="./video/An_Allegory_640x480px_SD.ogg" type="video/ogg">
        Your browser does not support the video tag.
      </video>
    </div><!--container-->
  </div><!--wrap-->
<?php include_once("footer.php") ?>