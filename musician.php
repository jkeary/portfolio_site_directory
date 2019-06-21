
<?php require_once('header.php'); ?>
  <body>
    <?php include_once("analyticstracking.php") ?>
    <?php 
      define('PAGE', 'Music');
      require_once("navbar.php");
    ?>

    <div id="wrap">
      <div class="container" style="max-width:1000px">   

        <div class="page-header-custom">
          <h1 class="text-left"><span class="glyphicon glyphicon-music"></span> Music</h1>
        </div>

        <br/>
        
        <a href="https://frendtheband.bandcamp.com" target="_blank">
          <div class="projentry">
            <div id="imgwrapper">
              <img src="imgs/frendlive.jpg" class="img-responsive img-rounded" alt="Responsive image">
            </div>
            <div id="contentwrapper">
              <h2>Frend</h2>
              <p><a></a>Frend is my current project.  We play loud grungy rock music.  <a href="https://frendtheband.bandcamp.com" target="_blank">Click here for our bandcamp.</a></p>
            </div>
          </div>
        </a>

        <a href="http://www.miniboone.com/" target="_blank">
          <div class="projentry">
            <div id="imgwrapper">
              <img src="imgs/miniboone.png" class="img-responsive img-rounded" alt="Responsive image">
            </div>
            <div id="contentwrapper">
              <h2>Miniboone</h2>
              <p><a></a>From September 2009 to January 2014, I was member of the New York City indie rock band, Miniboone.</p>
            </div>
          </div>
        </a>

        <a href="https://soundcloud.com/jameskeary" target="_blank">
          <div class="projentry">
            <div id="imgwrapper">
              <img src="imgs/balloons_JesseGarrisonPic.jpg" class="img-responsive img-rounded" alt="Responsive image">
            </div>
            <div id="contentwrapper">
              <h2>Solo Compositions</h2>
              <p><a></a>A collection of solo songs I have composed, recorded and or produced for various different projects over the past few years.  Clicking this link will take you to my Soundcloud account.</p>
            </div>
          </div>
        </a>

        <a href="https://soundcloud.com/sonisounds" target="_blank">
          <div class="projentry">
            <div id="imgwrapper">
              <img src="imgs/brainlogic.png" class="img-responsive img-rounded" alt="Responsive image">
            </div>
            <div id="contentwrapper">
              <h2>Brain Scan Music Composition</h2>
              <p><a></a>Stocastic music compositions of Alzheimer's disease PET brain scan data sets.  In this sonification technique, the level of gamma radiation intensity is quantized to 4 regions for 4 different instruments, and the pitch of the instruments are mapped to the y-axis. For scanning mode, the y-axis is mapped to time. For simultaneous mode, all notes play for an arbitrarily chosen amount of time. These sonifications were created using the audio programming language Csound, the midi library of orchestral sounds Garritan with its plugin Aria Player, and the Logic Pro digital audio workstation.</p>
            </div>
          </div>
        </a>

        <!-- <a href="http://www.jameskeary.com/docs/CV_2014.pdf" target="_tab">
          <div class="projentry">
            <div id="imgwrapper">
              <img src="http://images2.layoutsparks.com/1/194842/music-160-notes-song.jpg" class="img-responsive img-rounded" alt="Responsive image">
            </div>
            <div id="contentwrapper">
              <h2>Musical Credits</h2>
              <p><a></a>For a full listing of my musical credits, including tv and film placements, recordings and multimedia productions, check out my CV.</p>
            </div>
          </div>
        </a>   -->

        <!-- <a href="http://vimeo.com/48551367" target="_blank">
          <div class="projentry">
            <div id="imgwrapper">
              <img src="imgs/CinemasiveDisplays.png" class="img-responsive img-rounded" alt="Responsive image">
            </div>
            <div id="contentwrapper">
              <h2>CineMassive Displays OmegaPlex Commercial : Music Composer</h2>
              <p><a></a>Freelance music composition work.  Music composed and recorded in Logic Pro.  Setpember 2009.</p>
            </div>
          </div>
        </a> -->

      </div> <!--container-->   
    </div> <!--wrap-->

    <br/>
    
    <?php include_once("footer.php") ?>