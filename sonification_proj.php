<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>James Keary</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/bootstrap-theme.css" rel="stylesheet" />
    <link href="css/steeze.css" rel="stylesheet" />
  </head>

  <body>
    
    <?php include_once("analyticstracking.php") ?>

    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="./"><span class="glyphicon glyphicon-home"></span> Home</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-left"></ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="./sounddesigner.php"><span class="glyphicon glyphicon-headphones"></span> Sound</a></li>
            <li><a href="./programmer.php"><span class="glyphicon glyphicon-phone"></span> Code</a></li>
            <li><a href="./musician.php"><span class="glyphicon glyphicon-music"></span> Music</a></li>
            <li><a href="./videographer.php"><span class="glyphicon glyphicon-facetime-video"></span> Video</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-folder-close"></span> Docs<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="./docs/CV_2014.pdf" target="_tab"><span class="glyphicon glyphicon-file"></span> CV</a></li>
                <li><a href="./publications.php"><span class="glyphicon glyphicon-folder-close"></span> Publications</a></li>
                <li><a href="./presentations.php"><span class="glyphicon glyphicon-folder-close"></span> Presentations</a></li>
              </ul>
            </li>
            <li><a href="./aboutme.php"><span class="glyphicon glyphicon-user"></span> About</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div id="wrap">
      <div class="container" style="max-width:1000px">
        <div class="page-header-custom">
          <h1 class="text-left"><a href="./sounddesigner.php"><span class="glyphicon glyphicon-headphones"></span></a> Medical Imaging Sonification</h1>
        </div>
        <br/>

        <img src="imgs/brainscan2sound.png" class="img-responsive img-rounded leftimg" alt="Responsive image"></img>
        
        <h2>Project Description</h2>
        
        <ul>
          <li class="li_lead">This ongoing NYU Steinhardt Music Technology <a href="http://marl.smusic.nyu.edu/wordpress/" target="_tab">MARL</a> project is concerned with sonifying large datasets recieved from the Positron Emission Tomography (PET) brain scans of patients with Alzheimer's dementia (AD).</li>
          <li class="li_lead">The aim is to determine if displaying the data as sound will aid neurologists and doctors in a better diagnosing process give extra insight into AD, and to aid in the diagnosis of the disease.</li>
          <li class="li_lead">A complete project description can be found on the MARL website <a href="http://marl.smusic.nyu.edu/wordpress/projects/medical-imaging-sonification/" target="_tab">here</a></li>
          <li class="li_lead"><a></a>This research is supported by the <a href="http://ctsi.med.nyu.edu/" target="_tab">NYU-HHC Clinical and Translational Science Institute (CTSI)</a>.</li>
          <li class="li_lead">For more information on this project, please refer to the following publications: <a href="http://icad2013.com/paper/12_S3-4_Roginska.pdf" target="_tab"><i>Exploring Sonification for Augmenting Brain Scan Data</i></a>, <a href="http://icad.org/" target="_tab">ICAD</a> 2013.  (More publications to come).</li>
        </ul>
        
        <h3>Sound Design for Brain Scans</h3>
        
        <p class="li_lead">My chief task in the project was that of sound designer.  There were 2 different modes of sonification that we developed over the course of this work: scanning and simultaneous play mode.  Scanning sonifications would move across a dataset in one direction, left to right, up to down, mapping certain musical elements to different pieces of the data.  The simultaneous mode would play all data points at once: it could be selective to a particular region of the brain, or the entire dataset.  I have put in this section a selection of some of my favorite sound design pieces from each of the various modes and mappings.</p>

        <br/>

        <h4>Instrument to Intensity Mapping</h4>

        <img src="imgs/inst2int.png" class="img-responsive img-rounded rightimg" alt="Responsive image"></img>

        <p class="li_lead">In this sonification technique, the level of gamma radiation intensity is quantized to 4 regions for 4 different instruments, and the pitch of the instruments are mapped to the y-axis.  For scanning mode, the y-axis is mapped to time.  For simultaneous mode, all notes play for an arbitrarily chosen amount of time.  These sonifications were created using the audio programming language <a href="http://www.csounds.com/" target="_tab">Csound</a>, the midi library of orchestral sounds <a href="http://www.garritan.com/" target="_tab">Garritan</a> with its plugin Aria Player, and the <a href="http://www.apple.com/logic-pro/" target="_tab">Logic Pro</a> digital audio workstation.</p>
        <p class="li_lead">Sonifications created using the instrument to intensity mapping can be found at <a href="https://soundcloud.com/sonisounds" target="_tab">https://soundcloud.com/sonisounds</a>.</p>

<!--
        <div class="videowrapper">  
          <video width="40%" height="auto" class="center_video_pad" controls>
            <source src="./video/mod_JN01_perspec_sl0_m3_s1_.mp4" type="video/mp4">
            <source src="./video/mod_JN01_perspec_sl0_m3_s1_.ogg" type="video/ogg">
            Your browser does not support the video tag.
          </video>
            <p class="caption" style="width:40%">Panning Mode sonification of a 3D projection view of a brain with moderate AD.  The 4 instruments are piano, xylophone, flutes, and harp.  Listen with headphones or stereo speakers for stereo panning experience.</p>
        </div>
-->
        
        <br/>
      </div> <!--container-->
  </div> <!--wrap-->

  <div id="footer">       
    <div class="container">         
      <p class="text-muted text-center">Site by James Keary &#169 2014 | <a class="btn btn-xs btn-info" href="./contact.php" role="button">Contact Me</a></p>
    </div>     
  </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as   needed -->
    <script src="js/bootstrap.min.js"></script>   
  
  </body>

</html>