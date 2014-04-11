<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>James Keary</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="James Keary is a programmer in New York City">
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
            <li class="active"><a href="./programmer.php"><span class="glyphicon glyphicon-phone"></span> Code</a></li>
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

      <div class="container" style="max-width:950px">
        
        <div class="page-header-custom">
          <h1 class="text-left"><span class="glyphicon glyphicon-phone"></span> Programming</h1>
        </div>
        <br/>

        <a href="https://github.com/jkeary" target="_tab">
          <div class="projentry">
            <div id="imgwrapper">
              <img src="imgs/" class="img-responsive img-rounded" alt="Responsive image">
            </div>
            <div id="contentwrapper">
              <h3>My GitHub Account</h3>
              <p><a></a>Most of the code for past projects that I have done.<a href="http://jameskeary.com/sonification_proj.php" target="_tab">Medical Imaging Sonification</a> NYU Steinhardt research project.</p>
            </div>
          </div>
        </a>

        <a href="soni_gui_proj.php">
          <div class="projentry">
            <div id="imgwrapper">
              <img src="imgs/interactivesonification.png" class="img-responsive img-rounded" alt="Responsive image">
            </div>
            <div id="contentwrapper">
              <h3>Interactive Medical Imaging Sonification GUI</h3>
              <p><a></a>The GUI software I developed in SuperCollider for the <a href="http://jameskeary.com/sonification_proj.php" target="_tab">Medical Imaging Sonification</a> NYU Steinhardt research project.</p>
            </div>
          </div>
        </a>

        <a href="sieves_proj.php">
          <div class="projentry">
            <div id="imgwrapper">
              <img src="imgs/SievesProjPic.png" class="img-responsive img-rounded" alt="Responsive image">
            </div>
            <div id="contentwrapper">
              <h3>A Musical Calculator</h3>
              <p><a></a>This was my final project for the Java Music Systems class, Fall 2011, and my first real attempt at algorithmic composition.  The idea behind the project was to create a tool for the modern day composer: a musical calculator based on Greek stochastic composer <a href="http://www.iannis-xenakis.org/xen/index.html" target="_tab">Iannis Xenakis</a>'s sieve theory.  The project was written in Java with the JMSL API.</p>
            </div>
          </div>
        </a>     
<!--
        <a href="JSyn_Proj.php">
          <div class="projentry">
            <div id="imgwrapper">
              <img src="imgs/JSynProjsPic.png" class="img-responsive img-rounded" alt="Responsive image">
            </div>
            <div id="contentwrapper">
              <h3>Java Synth Applets</h3>
              <p><a href="JSyn_Proj.php"></a>These simple synthesizer applets were created over the course of a few class projects in my <a href="http://steinhardt.nyu.edu/music/technology/programs/graduate/courses/E85_2608" target="_tab">Java Music Systems</a> class at NYU, Fall 2011.  They were created in the Java programming language using <a href="http://www.softsynth.com/wire/" target="_tab">Wire</a>, a graphical patch editor, and <a href="http://www.softsynth.com/jsyn/" target="_tab">JSyn</a>, Java's audio synthesis API.</p>
            </div>
          </div>
        </a>

        <a href="JScore_Proj.php">
          <div class="projentry">
            <div id="imgwrapper">
              <img src="imgs/JSMLScoreProjPic.png" class="img-responsive img-rounded" alt="Responsive image">
            </div>
            <div id="contentwrapper">
              <h3>JMSL JScore Applet</h3>
              <p><a href="http://www.algomusic.com/index.html" target="_tab">Java Music Specification Language</a> is a Java API created by Phil Burk and <a href="http://didkovsky.com/" target="_tab">Nick Didkovsky</a>, my Java Music Systems class professor at NYU, Fall 2011.  Professor Didkovski was one of the more inspiring teachers I had at the program.  For this project, I used JSyn Synth patches from a previous project as the instruments for a piece scored in JMSL.</p>
            </div>
          </div>
        </a>
-->
        </div>
    </div>
    <br/>
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