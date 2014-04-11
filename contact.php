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
     
      <div class="container" style="max-width:1100px">
        
        <div class="page-header-custom">
          <h1 class="text-left"><span class="glyphicon glyphicon-envelope"></span> Contact Me</h1>
        </div>
        
        <br/>

        <div class="row">
          <div class="col-lg-12">  
            <h4>You can email at <a href="mailto:jkeary@gmail.com" target="_blank">jkeary@gmail.com</a> if you need work done in the following fields:</h4>
          </div>
        </div>

        <div class="row">  
          <div class="col-sm-3">  
            <h3 margin="10px 0">Audio Programming:</h3>   
            <p margin="10px 0 10px 0" style="text-align:left">C, Java, MatLab, SuperCollider, Csound, Pure Data, Unreal Script</p>  
          </div>  
          <div class="col-sm-3">  
            <h3 margin="10px 0">Web Development:</h3>   
            <p margin="10px 0 10px 0" style="text-align:left">HTML, CSS, JavaScript, Java, JQuery, JMSL, Jsyn and Web Audio API</p>  
          </div>  
          <div class="col-sm-3">  
            <h3 margin="10px 0">Sound Design:</h3>   
            <p margin="10px 0 10px 0" style="text-align:left">Logic Pro, Ableton Live, Pro Tools, Reaper, FMod Designer, Unreal Development Kit, Final Cut Studio</p>  
          </div>  
          <div class="col-sm-3">  
            <h3 margin="10px 0">Music:</h3>   
            <p margin="10px 0 10px 0" style="text-align:left">Finale, Sibelius, Songwriter, Composer, Orchestrator, Musician, Guitarist, Guitar Instructor</p>  
          </div>  
        </div>   

        <br/>
             
        <h4>I am also plugged into the networks below.  If you are too, thats neat, lets connect.</h4>
      
        <a href="http://www.linkedin.com/in/jameskeary" target="_blank"><img src="./imgs/linkedin_48.png" alt="LinkedIn" id="LinkedIn"/></a>
        <a href="http://angel.co/james-keary" target="_blank"><img src="./imgs/angellist_48.png" alt="Angellist" id="Angellist"/></a>
        <a href="http://www.facebook.com/jaemskeray" target="_blank"><img src="./imgs/fb_48.png" alt="Facebook" id="Facebook"/></a>
        <a href="http://www.youtube.com/JaemsKeray" target="_blank"><img src="./imgs/yt_48.png" alt="YouTube" id="Youtube"/></a>
        <a href="http://www.vimeo.com/jaemskeray" target="_blank"><img src="./imgs/vimeo_48.png" alt="Vimeo" id="Vimeo"/></a>
        <a href="https://github.com/jkeary" target="_blank"><img src="./imgs/github_48.png" alt="Github" id="Github"/></a>
        <a href="http://soundcloud.com/jameskeary" target="_blank"><img src="./imgs/soundcloud_48.png" alt="Soundcloud" id="Soundcloud"/></a>
        <a href="http://oneminreviews.wordpress.com/" target="_blank"><img src="./imgs/wordpress_48.png" alt="Wordpress" id="Wordpress"/></a>

      </div> <!--container-->

    </div> <!--wrap-->

    <div id="footer">
      <div class="container">
        <p class="text-muted text-center">Site by James Keary &#169 2014</p>
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