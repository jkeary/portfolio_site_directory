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
                <li><a href="./docs/Resume.pdf" target="_tab"><span class="glyphicon glyphicon-file"></span> Resume</a></li>
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

  <div id="footer">       
    <div class="container">         
      <p class="text-muted text-center">Site by James Keary &#169 2018 | <a class="btn btn-xs btn-info" href="./contact.php" role="button">Contact Me</a></p>
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