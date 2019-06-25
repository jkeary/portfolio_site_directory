<?php require_once('header.php'); ?>
  <body>
    <?php include_once("analyticstracking.php") ?>
    <?php 
      define('PAGE', 'About');
      require_once("navbar.php");
    ?>

    <div id="wrap">

      <div class="container" style="max-width:1100px">
        
        <div class="page-header-custom">
          <h1 class="text-left"><span class="glyphicon glyphicon-user"></span> About Me</h1>
        </div>
        <br/>
        <div>
          <p class="lead">
            <img class="rightimg_lg img-responsive img-rounded" src="./imgs/frend.jpg" align="right"/>
            I am a musician and a songwriter.  My current project is the DC to Philadelphia rock band <a href="https://frendtheband.bandcamp.com" target="_blank">Frend</a>.  Previously I was a member of the NYC indie rock group <a href="https://miniboone.bandcamp.com" target="_blank">Miniboone</a>.  I have been commissioned to do pieces for commercials and videos, produced and written songs for and with other artists, created multiple recordings and music videos of my own work, toured and played over 200 shows, performed at major music festivals, and even have had songs I've written placed in films and tv shows.  My current <a href="./docs/CV.pdf" align="right"/>CV</a> has a complete listing of those credits.
            <br><br>
            For the past 5 years I worked as a Software Engineer for the Washington D.C. political advocacy marketing start-up Crowdskout.  Here is my current <a href="./docs/SoftwareEngineerResume.pdf" align="right"/>software engineering resume</a> with details on what I accomplished in that field.
            <br><br>
            I also have work and education experience in the audio tech field.  I went to NYU Steinhart where I received my Masters in Music Technology.  Here is my current <a href="./docs/AudioEngineerResume.pdf" align="right"/>audio engineering resume</a> with my accomplished in that line of work.
            <br><br>
            Feel free to contact me at <a href="mailto:jkeary@gmail.com" target="_blank">jkeary@gmail.com</a>.
          </p> 
        </div>
                    
      </div><!--container-->

      <br/>
      
      <div id="like_button_container"></div>

    </div><!--wrap-->

    <?php include_once("footer.php") ?>
