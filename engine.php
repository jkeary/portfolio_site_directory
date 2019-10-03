<?php 
  require_once('header.php');
  include_once("analyticstracking.php"); 
  define('PAGE', '');
  include_once("navbar.php");
?>
<body>
  <div id="wrap">
    <div class="container" style="max-width:1000px">
      <div class="page-header-custom">
        <h1 class="text-left"><a href="./sounddesigner.php"><span class="glyphicon glyphicon-headphones"></span></a> Physical Model of Car Engine for Game Audio</h1>
      </div>
      <br/>
      <div class="videowrapper">
        <video class="center_video" width="50%" height="auto" controls>
          <source src="./video/Pd_extended_engine.mp4" type="video/mp4">
          <source src="./video/Pd_extended_engine.ogg" type="video/ogg">
          Your browser does not support the video tag.
        </video>
        <!-- <p class="caption" style="width:20%">Pd Extended Car Engine</p> -->
      </div>
      
      <p class="li_lead">During the spring of 2013, I took a Masters course in Game Audio taught by Composer, Producer and Game Sound Designer Jean Luc Cohen.  This course was a facinating look into the world of game audio, which leads the industry into new audio based technologies.  This is a project from that class in which I created the sounds of a car engine through physical modeling and procedural audio.  I used the graphical programming language Pure Data to patch this incredibly complex model of a 4 cylindar engine together.  Procedural audio such as this is the future of game sound design.</p>

      <br/>

    </div><!--container-->
  </div><!--wrap-->
<?php include_once("footer.php") ?>