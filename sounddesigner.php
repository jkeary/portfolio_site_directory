<?php require_once('header.php'); ?>
  <body>
    <?php include_once("analyticstracking.php") ?>
    <?php
      define('PAGE', 'Sound');
      include_once("navbar.php");
    ?>

    <div id="wrap">

      <div class="container" style="max-width:950px">
        
        <div class="page-header-custom">
          <h1 class="text-left"><span class="glyphicon glyphicon-headphones"></span> Sound Designer</h1>
        </div>
        <br/>

        <a href="engine.php">
          <div class="projentry">
            <div id="imgwrapper">
              <img src="imgs/Pd_engine_pic.png" class="img-responsive img-rounded" alt="Responsive image">
            </div>
            <div id="contentwrapper">
              <h2>Physical Model of Car Engine</h2>
              <p><a></a>Project for Game Audio class, Spring 2013, NYU MTech.  Physical Model of 4 cylendar car engine made in Pure Data.</p>
            </div>
          </div>
        </a>   

        <a href="sonification_proj.php">
          <div class="projentry">
            <div id="imgwrapper">
              <img src="imgs/brainlogic.png" class="img-responsive img-rounded" alt="Responsive image">
            </div>
            <div id="contentwrapper">
              <h2>Sonification of Medical Imaging Data</h2>
              <p><a></a>The <a href="http://marl.smusic.nyu.edu/wordpress/projects/medical-imaging-sonification/" target="_tab">Medical Imaging Sonification</a> project is an ongoing NYU Music Technology <a href="http://marl.smusic.nyu.edu/wordpress/" target="_tab">Music and Audio Research Laboratory</a> (MARL) project.   By sonically exploring the vast data sets yielded from medical imaging technologies such as PET scans, our goal is to help doctors in diagnosing diseases such as Alzheimer's.</p>
            </div>
          </div>
        </a> 

        <a href="presto.php">
          <div class="projentry">
            <div id="imgwrapper">
              <img src="imgs/presto.png" class="img-responsive img-rounded" alt="Responsive image">
            </div>
            <div id="contentwrapper">
              <h2>Pixar Short <i>Presto</i> Audio Replacement Project</h2>
              <p><a></a>Final project, Audio for Video class, Spring 2013, NYU MTech.  Pixar's animated short <i>Presto</i> with all new audio.</p>
            </div>
          </div>
        </a>      

        <a href="https://www.youtube.com/watch?v=zrmrTtVZZDw" target="_blank">
          <div class="projentry">
            <div id="imgwrapper">
              <img src="imgs/M25SM.png" class="img-responsive img-rounded" alt="Responsive image">
            </div>
            <div id="contentwrapper">
              <h2><i>Male, 25, Seeking Mentor</i> Short Film: Sound Mixer</h2>
              <p><a></a><i>Male, 25, Seeking Mentor</i> is a short film by Kirk Larsen.  On this project I was sound editor and mixer.  March 2014.</p>
            </div>
          </div>
        </a>  

        </div>
    </div>
    <br/>
    
    <?php include_once("footer.php") ?>