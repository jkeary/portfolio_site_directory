<?php require_once('header.php'); ?>
  <body style="padding-top:0px">
    <video autoplay muted loop id="myVideo">
      <source src="video/VID_20190611_153125.mp4" type="video/mp4">
    </video>
    
    <button id="myBtn" onclick="myFunction()"></button>

    <?php include_once("analyticstracking.php") ?>
    <div id="wrap">

      <div class="container" style="max-width:800px">   
        
        <div class="page-header">
          <h1 class="maintitle text-center">James Keary</h1>
        </div>
        
        <div class="row">
          <div class="col-lg-12">  
            <p id="titleText" style="text-align:center">Welcome to my portfolio website.  Click anywhere to stop the madness.<p>
          </div>
        </div>
        
        <br/>

        <div class="row">
          <div class="col-xs-4">
            <center>
              <a href="./sounddesigner.php">
                <span class="glyphicon glyphicon-headphones glyphicon-index"></span>
                <br/>
                <h2 class="small">Sound Designer<h2/>
              </a></center>
            </div>
          <div class="col-xs-4">
            <center>
              <a href="./programmer.php">
                <span class="glyphicon glyphicon-phone glyphicon-index"></span>
                <br/>
                <h2 class="small">Software Engineer</h2>
              </a>
            </center>
          </div>
          <div class="col-xs-4">
            <center>
              <a href="./musician.php">
                <span class="glyphicon glyphicon-music glyphicon-index"></span>
                <br/>
                <h2 class="small">Musician</h2>
              </a>
            </center>
          </div>
        </div> <!--row1-->

        <br/>
        <br/>
        
        <div class="row">
          <div class="col-xs-4">
            <center>
              <a href="./videographer.php">
                <span class="glyphicon glyphicon-facetime-video glyphicon-index"></span>
                <br/>
                <h2 class="small">Videographer</h2>
              </a>
            </center>
          </div>
          <div class="col-xs-4">
            <center>
              <a href="./aboutme.php">
                <span class="glyphicon glyphicon-user glyphicon-index"></span>
                <br/>
                <h2 class="small">About Me</h2>
              </a>
            </center>
          </div>
          <div class="col-xs-4">
            <center>
              <button type="button" class="btn btn-fake" rel="popover" data-container="body" data-toggle="popover" data-placement="left" data-html="true" data-content="<ul><li><a href='./docs/Resume2019.pdf' target='_tab'><span class='glyphicon glyphicon-file'></span> Resume</a></li><li><a href='./publications.php'><span class='glyphicon glyphicon-folder-close'></span> Publications</a></li><li><a href='./presentations.php'><span class='glyphicon glyphicon-folder-close'></span> Presentations</a></li></ul>">
                <span class="glyphicon glyphicon-folder-close glyphicon-index"></span>
                <br/>
                <h2 class="small">Documents</h2>
              </button>
            </center>        
          </div>
        </div> <!--row2-->
        
        <br/>  
      
      </div> <!--container-->   
    
    </div> <!--wrap-->

    <div id="footer">
      <div class="container">
        <p class="text-muted text-center">Site by James Keary &#169 2018 | <a class="btn btn-xs btn-info" href="./contact.php" role="button">Contact Me</a></p>
      </div>
    </div>

    <!-- JavaScript 
    ================================================== -->
    <script src="https://code.jquery.com/jquery.js"></script> <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/bootstrap.min.js"></script>  
    <script src="js/popover.js"></script>
    <script scr="js/tootip.js"></script>
    <script type="text/javascript">
      $(function () {
          $('body').popover({
              selector: '[data-toggle="popover"]'
          });
  
            $('body').tooltip({
                selector: 'a[rel="tooltip"], [data-toggle="tooltip"]'
            });
      });
    </script>

    <script>
      // Get the video
      var video = document.getElementById("myVideo");

      // Get the title text
      var titleText = document.getElementById("titleText");

      // Pause and play the video, and change the button text
      function myFunction() {
        if (video.paused) {
          video.play();
          titleText.innerHTML = "Welcome to my portfolio website.  Click anywhere to stop the madness.";
        } else {
          video.pause();
          titleText.innerHTML = "ahh, so much better...";
        }
      }
    </script>
  </body>

</html>