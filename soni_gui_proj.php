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
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-folder-open"></span> Docs<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="./docs/Resume2014_forweb.pdf" target="_tab"><span class="glyphicon glyphicon-file"></span> Resume</a></li>
                <li><a href="./docs/ThesisDocument_jpk.pdf" target="_tab"><span class="glyphicon glyphicon-file"></span> NYU Masters Thesis</a></li>
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
          <h1 class="text-left"><a href="./programmer.php"><span class="glyphicon glyphicon-phone"></span></a> Interactive Medical Imaging Sonification GUI</h1>
        </div>
        
        <br/>
        
        <p>This GUI was designed in the <a href="http://supercollider.github.io/" target="_tab">SuperCollider</a> audio sythesis programming language.  The sonifiction mode is what is known as triple-tone sonifcation.  In this sonification mode, the average gamma ray radiation intensity of 3 lobes are set to triangle wave oscillators.  Neurologists often use a similar  tactic, when visually examining brain scan images, by comparing the intensity of the parietal and frontal regions to that of the sensorymotor cortex.  In the visual realm, this is translated into brighter colors.  Sonically, we used higher and lower frequency values.  Alzheimer's disease is usually present in a few lobes of interest, the frontal lobe and the parietal lobe.  The sensorymotor cortex acts as the reference lobe since there is never any decrease in brain activity in that region of the brain in AD.  These three oscillators beat at different frequencies, forming different rhythmic patterns and timbral textures.  The GUI is set up for <i>interactive</i> sonification, so that the user is able to test the beating patterns.  The goal of this project was to find beating patterns specific to the levels of severity of AD, for instance, mild, moderate, and severe.  This video demonstrates what a moderate severity brain can sound like using this technique.</p>

        <video width="70%" height="auto" class="center_video_pad" controls>
          <source src="./video/interactive_sonification_GUI.mp4" type="video/mp4">
          <source src="./video/interactive_sonification_GUI.ogg" type="video/ogg">
          Your browser does not support the video tag.
        </video>
        
        <br/>

        <p>This GUI was designed for the ongoing NYU Steinhardt Music Technology <a href="http://marl.smusic.nyu.edu/wordpress/" target="_tab">MARL</a> project on <a href="http://marl.smusic.nyu.edu/wordpress/projects/medical-imaging-sonification/" target="_tab">Medical Imaging Sonification</a>.</p>

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