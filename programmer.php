<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>James Keary</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="James Keary is a programmer in Washington DC">
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

      <div class="container" style="max-width:1100px">
        
        <div class="page-header-custom">
          <h1 class="text-left"><span class="glyphicon glyphicon-phone"></span> Software Engineer</h1>
        </div>
        <br/>

        <a href="https://www.crowdskout.com" target="_blank">
          <div class="projentry">
            <div id="imgwrapper">
              <img src="imgs/crowdskout.png" class="img-responsive img-rounded" alt="Responsive image">
            </div>
            <div id="contentwrapper">
              <h2>Crowdskout</h2>
              <p><a></a>Currently I work for the tech start-up Crowdskout in Washington DC.  For a list of my duties including technologies I use on a daily basis, please take a look at my <a href="docs/Resume.pdf" target="_tab">resume</a>.</p>
            </div>
          </div>
        </a>

        <a href="http://www.modernnotion.com" target="_blank">
          <div class="projentry">
            <div id="imgwrapper">
              <img src="imgs/modernnotiondesktop.png" class="img-responsive img-rounded" alt="Responsive image">
            </div>
            <div id="contentwrapper">
              <h2>Modern Notion</h2>
              <p><a></a>Modern Notion is a pop history and science website from 2014 - 2016.  I was sole developer for this project.  The front end was done in ReactJS with SCSS, and the back was built using Wordpress's PHP Framework.  Some of the image links unfortunately have been broken as this site has not been maintained due to lack of funding for the reporters.  However it does showcase my use of the React and Wordpress frameworks for web development.  Unfortunately since I built this site for my current employeer I cannot publish my code on github.</p>
            </div>
          </div>
        </a>

        <a href="https://github.com/crowdskout/crowdskout-wp" target="_blank">
          <div class="projentry">
            <div id="imgwrapper">
              <img src="imgs/wordpress.png" class="img-responsive img-rounded" alt="Responsive image">
            </div>
            <div id="contentwrapper">
              <h2>Crowdskout Wordpress Plugin</h2>
              <p><a></a>Developed the Crowdskout Wordpress plugin for my current employeer, Crowdskout.  It was an early version of the tracking code that is now part of the Crowdskout Web Application.  This code was written in PHP and Javascript using the Wordpress PHP framework and the SVN code management tool.  This plugin is now defunct.</p>
            </div>
          </div>
        </a>

        <a href="java_synths.php">
          <div class="projentry">
            <div id="imgwrapper">
              <img src="imgs/JSynProjsPic.png" class="img-responsive img-rounded" alt="Responsive image">
            </div>
            <div id="contentwrapper">
              <h2>Java Synthesizers Applications</h2>
              <p><a></a>These simple synthesizer web based applications were created in Java using <a href="http://www.softsynth.com/wire/" target="_tab">Wire</a>, a graphical patch editor, and <a href="http://www.softsynth.com/jsyn/" target="_tab">JSyn</a>, Java's audio synthesis API.</p>
            </div>
          </div>
        </a>

        <a href="soni_gui_proj.php">
          <div class="projentry">
            <div id="imgwrapper">
              <img src="imgs/interactivesonification.png" class="img-responsive img-rounded" alt="Responsive image">
            </div>
            <div id="contentwrapper">
              <h2>Medical Sonification Software in SuperCollider</h2>
              <p><a></a>Interactive software I developed while working on the <a href="http://jameskeary.com/sonification_proj.php" target="_tab">Medical Imaging Sonification</a> research project at NYU Steinhardt.  Coding was done in SuperCollider, Csound, Matlab and C++ for this project.</p>
            </div>
          </div>
        </a>

        <a href="sieves_proj.php">
          <div class="projentry">
            <div id="imgwrapper">
              <img src="imgs/SievesProjPic.png" class="img-responsive img-rounded" alt="Responsive image">
            </div>
            <div id="contentwrapper">
              <h2>Java Musical Calculator Application</h2>
              <p><a></a>Written in Java, this is my first real attempt at algorithmic composition.  Based on Greek stochastic composer <a href="http://www.iannis-xenakis.org/xen/index.html" target="_tab">Iannis Xenakis</a>'s sieve theory, this web based application was written in Java, using the JMSL API.  The idea behind the project was to create a tool for the modern day composer: a musical calculator.</p>
            </div>
          </div>
        </a>     

        <a href="https://github.com/jkeary" target="_tab">
          <div class="projentry">
            <div id="imgwrapper">
              <img src="https://og.github.com/octocat/github-octocat@1200x630.png" class="img-responsive img-rounded" alt="Responsive image" >
            </div>
            <div id="contentwrapper">
              <h2>My Github account</h2>
              <p><a></a>Clicking this link will take you to my Github account.  This showcases my work in Digital Signal Processing algorithms, GUI design and development, and even the code for this website.  I am constantly updating my github account with new projects that I have worked on.</p>
            </div>
          </div>
        </a>

        </div>
    </div>
    <br/>
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