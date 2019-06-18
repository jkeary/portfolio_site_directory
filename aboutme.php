<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>James Keary</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="James Keary is a freelance a software programmer and web designer with expertise in audio, a sound designer, and an independent musician based out of Washington DC">
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
            <img class="rightimg_lg img-responsive img-rounded" src="./imgs/frend.jpg" align="right"/>
            I spent the past roughly 5 years as a Software Engineer for the Washington D.C. advocacy marketing start-up Crowdskout.  
            <br><br>
            Prior to my work at Crowdskout, I attended New York University, Steinhardt where I received my <a href="http://steinhardt.nyu.edu/music/technology/programs/graduate/" target="_tab">Masters in Music</a>, Music Technology degree. While there I studied Digital Signal Processing and Audio Programming, and worked as a Research Assistant and Programmer on a Medical Sonification Project in conjunction with the NYU Langone Medical Center.
            <br><br>
            I am also a musician/songwriter.  My current project is the DC Rock band <a href="https://frendtheband.bandcamp.com" target="_blank">Frend</a>.  Previously I was a founding member of the NYC Rock group <a href="https://miniboone.bandcamp.com" target="_blank">Miniboone</a>, several commissioned pieces for commercials and video, produced and written songs for other musical artists, and even have had songs placed in film and video.  
            <br><br>
            Here is my current <a href="./docs/Resume2019.pdf" align="right"/>software engineering resume</a>.  Feel free to contact me at <a href="mailto:jkeary@gmail.com" target="_blank">jkeary@gmail.com</a>.
          </p> 
        </div>
                    
      </div><!--container-->

      <br/>
      
      <div id="like_button_container"></div>

    </div><!--wrap-->

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

    <!-- Load React. -->
    <!-- Note: when deploying, replace "development.js" with "production.min.js". -->
    <script src="https://unpkg.com/react@16/umd/react.development.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js" crossorigin></script>

    <!-- Load our React component. -->
    <script src="like_button.js"></script>
  
  </body>

</html>
