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
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-folder-open"></span> Docs<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="./docs/Resume2014_forweb.pdf" target="_tab"><span class="glyphicon glyphicon-file"></span> Resume</a></li>
                <li><a href="./docs/ThesisDocument_jpk.pdf" target="_tab"><span class="glyphicon glyphicon-file"></span> NYU Masters Thesis</a></li>
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
          <img class="centerimg_md img-responsive img-rounded" src="./imgs/3A3.jpg"/>
        </div>
        <br/>
        <p class="lead">I am a recent graduate from New York University, Steinhardt with a Masters in <a href="http://steinhardt.nyu.edu/music/technology/programs/graduate/" target="_tab">Music Technology</a>.  While there, I studied what can generally be described as the science of sound, studying such diverse subjects as digital signal processing, programming for audio, sound sythesis, audio codec design, immersive and 3D audio, acoustics, psychoacoustics, electronics, and sound design for games and film.  I also continued my musical studies from undergrad taking classes in orchestration and theory.  <a href="http://steinhardt.nyu.edu/music/technology/research/masters_theses" target="_tab">My thesis work</a> was on the design and execution of a virtual surround sound microphone, based in the field of <a href="http://www.ambisonic.net/" target="_tab">Ambisonics</a>. I am also a musician, having studied at <a href="http://new.oberlin.edu/conservatory/" target="_tab">the Oberlin Conservatory</a> and performed in the New York indie rock band <a href="http://miniboone.com/" target="_tab">Miniboone</a>.  I have professional experience in composition, orchestration/arranging, and sound design, as well as tutoring experience in music theory and guitar technique. <a href="http://www.jameskeary.com/docs/Resume2014_forweb.pdf" target="_tab">This</a> is the most current version of my resume.  Currently, I am working in New York City as a freelance sound designer, programmer, audio consultant, and musician.  Feel free to contact me at <a href="mailto:jkeary@gmail.com" target="_blank">jkeary@gmail.com</a> for work.</p>
             
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
