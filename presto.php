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
          <h1 class="text-left"><a href="./sounddesigner.php"><span class="glyphicon glyphicon-headphones"></span></a> Pixar Short <i>Presto</i> Audio Replacement Project</h1>
        </div>
        <br/>
        <div class="videowrapper">
          <video class="center_video" width="50%" height="auto" controls>
            <source src="./video/PrestoSurround_V1_forMacPC - Mac and PC.mp4" type="video/mp4">
            <source src="./video/PrestoSurround_V1_forMacPC - Mac and PC.ogg" type="video/ogg">
            Your browser does not support the video tag.
          </video>
            <p class="caption" style="width:10%">Stereo Mix</p>
        </div>
        <br/>
        <p class="li_lead">My final project for my Audio for Video class, Spring 2013, NYU MTech, was to completely redo all aspects of the soundtrack of the Pixar short, Presto.  The project covered all facets of audio for film.  For the musical soundtrack, I felt the music needed to be fully orchestrated in the tradition of Disney and Pixar.  Since I did not have a full orchestra at my disposal, this involved piecing together classical music pieces and adding my own music when the story needed it.  That part of the project was done in Logic Pro.  The sound effects were collected from different sound libraries, Foley work (making and recording our own sound effects), and voice over work (I even did the voice over for the magician character).  The project was mixed and edited in Pro Tools in both Stereo and 5.0 surround.</p>

        <br/>

      </div><!--container-->
    </div><!--wrap-->


    <div id="footer">       
      <div class="container">         
        <p class="text-muted text-center">Site by James Keary &#169 2014 | <a class="btn btn-xs btn-info" href="./contact.php" role=" button">Contact Me</a></p> 
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