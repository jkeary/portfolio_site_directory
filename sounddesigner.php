<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>James Keary</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="James Keary is a sound designer in Washington DC">
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
            <li class="active"><a href="./sounddesigner.php"><span class="glyphicon glyphicon-headphones"></span> Sound</a></li>
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
    <div id="footer">
      <div class="container">
        <p class="text-muted text-center">Site by James Keary &#169 201 | <a class="btn btn-xs btn-info" href="./contact.php" role="button">Contact Me</a></p>
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