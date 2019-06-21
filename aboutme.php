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
            For the past 5 years I've been working as a Software Engineer for the Washington D.C. advocacy marketing start-up Crowdskout.   Here is my current <a href="./docs/Resume2019.pdf" align="right"/>software engineering resume</a> with details on what I accomplished while there.
            <br><br>
            I am also a musician/songwriter.  Prior to my work at Crowdskout, I attended New York University, Steinhardt, where I received my <a href="http://steinhardt.nyu.edu/music/technology/programs/graduate/" target="_tab">Masters in Music, Music Technology degree</a>.  I studied Digital Signal Processing, Audio Programming, Audio Engineering and Composition.  I also worked as a Research Assistant and Programmer on a <a href="./sonification_proj.php">Medical Sonification Project</a> in conjunction with the NYU Langone Medical Center.
            <br><br>
              My current project is the DC Rock band <a href="https://frendtheband.bandcamp.com" target="_blank">Frend</a>.  Previously I was a founding member of the NYC Rock group <a href="https://miniboone.bandcamp.com" target="_blank">Miniboone</a>, several commissioned pieces for commercials and video, produced and written songs for other musical artists, and even have had songs placed in film and video.  
            <br><br>
            Feel free to contact me at <a href="mailto:jkeary@gmail.com" target="_blank">jkeary@gmail.com</a>.
          </p> 
        </div>
                    
      </div><!--container-->

      <br/>
      
      <div id="like_button_container"></div>

    </div><!--wrap-->

    <?php include_once("footer.php") ?>
