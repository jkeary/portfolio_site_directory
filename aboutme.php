<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>James Keary</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="James Keary is a freelance sound designer, a web designer and software programmer, an audio consultant and a musician in New York City">
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
            <li class="active"><a href="./aboutme.php"><span class="glyphicon glyphicon-user"></span> About</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div id="wrap">

      <div class="container" style="max-width:1100px">
        
        <div class="page-header-custom">
          <h1 class="text-left"><span class="glyphicon glyphicon-user"></span> About Me</h1>
        </div>
        <br/>
        <div>
          <p class="lead">
            <img class="rightimg_md img-responsive img-rounded" src="./imgs/me2_2014_05_02.jpg" align="right"/>
            I am a sound designer, programmer, and independent artist.  I have a Masters in <a href="http://steinhardt.nyu.edu/music/technology/programs/graduate/" target="_tab">Music Technology</a> from NYU, where I studied digital audio processing, audio programming, surround sound, acoustics, psychoacoustics, and audio electronics.  <a href="http://steinhardt.nyu.edu/music/technology/research/masters_theses" target="_tab">My thesis work</a> was on virtual surround sound microphone design, using <a href="http://www.ambisonic.net/" target="_tab">Ambisonics</a> and digital signal processing.  I have programming experience in web development, software development, audio and digital signal programming.  I am also an independent musician and composer; I was a founding member of the New York indie band <a href="http://www.miniboone.com" target="_tab">Miniboone</a>, and a commissioned composer for commercials, film, and musical artists.  <a href="http://www.jameskeary.com/docs/CV_2014.pdf" target="_tab">Here</a> is my CV.  Feel free to contact me at <a href="mailto:jkeary@gmail.com" target="_blank">jkeary@gmail.com</a> for work.
          </p> 
        </div>
                    
      </div><!--container-->

      <br/>

    </div><!--wrap-->

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
