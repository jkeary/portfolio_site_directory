<?php require_once('header.php'); ?>
  <body>
    <?php include_once("analyticstracking.php") ?>
    <?php include_once("navbar.php") ?>

    <div id="wrap">
      <div class="container" style="max-width:1000px">
        <div class="page-header-custom">
          <h1 class="text-left"><a href="./programmer.php"><span class="glyphicon glyphicon-phone"></span></a> Medical Imaging Sonification Software Demo</h1>
        </div>
        
        <div class="videowrapper">
          <video class="center_video" width="50%" height="auto" controls>
            <source src="./video/interactive_sonification_GUI.mp4" type="video/mp4">
            <source src="./video/interactive_sonification_GUI.ogg" type="video/ogg">
            Your browser does not support the video tag.
          </video>
        </div>

        <p>Software I developed for the ongoing NYU Steinhardt Music Technology <a href="http://marl.smusic.nyu.edu/wordpress/" target="_tab">MARL</a> project on <a href="http://marl.smusic.nyu.edu/wordpress/projects/medical-imaging-sonification/" target="_tab">Medical Imaging Sonification</a>.  Written in the <a href="http://supercollider.github.io/" target="_tab">SuperCollider</a> programming language, this software was developed for <i>interactive</i> sonification, where the user is able to prototype audio parameters mapped to the data set.  For a complete project description you can read the publication on it <a href="http://www.jameskeary.com/docs/SONIFICATION%20METHOD%20TO%20ENHANCE%20THE%20DIAGNOSIS%20OF%20DEMENTIA.pdf" target="_tab">here</a> or my conference presentation on the publication <a href="http://www.jameskeary.com/docs/Sonification_ICAD2014Talk.pdf" target="_tab">here</a>.  I also explain the project, focusing on my job, <a href="http://www.jameskeary.com/sonification_proj.php">here</a>.</p>

        <p><a href="https://github.com/jkeary/sonification_gui" target="_tab">Here is the code to this project</a></p>

      </div> <!--container-->
  </div> <!--wrap-->

  <?php include_once("footer.php") ?>