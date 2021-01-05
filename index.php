<?php require_once('header.php');
 include_once("consts.php");
?>
  <body style="padding-top:0px">
    <video autoplay muted loop id="myVideo">
      <source src="video/background_comp.mp4" type="video/mp4">
    </video>
    <a id="videoArtworkLink" target='_tab' href="http://orbweaverarts.bigcartel.com">background art by Orbweaver Designs</a>

    <?php include_once("analyticstracking.php") ?>
    <div id="wrap">

      <div class="container" style="max-width:800px; padding-top:5%;">   
        
        <div class="page-header">
          <h1 class="maintitle text-center"><a href="./contact.php" role="button"><span style="background-color: black; color: #008080">James Keary</span></a></h1>
        </div>
        
        <div class="row">
          <div class="col-lg-12" style="text-align:center">  
            <span id="titleText">Welcome to my portfolio website</span>
          </div>
        </div>
        
        <br/>

        <div class="row">
          <div class="col-xs-4">
            <center>
              <a href="./sounddesigner.php">
                <span class="glyphicon glyphicon-headphones glyphicon-index"></span>
                <br/>
                <h2 class="small"><span style="background-color: black">Sound Designer</span><h2/>
              </a></center>
            </div>
          <div class="col-xs-4">
            <center>
              <a href="./programmer.php">
                <span class="glyphicon glyphicon-phone glyphicon-index"></span>
                <br/>
                <h2 class="small"><span style="background-color: black">Software Engineer</span></h2>
              </a>
            </center>
          </div>
          <div class="col-xs-4">
            <center>
              <a href="./musician.php">
                <span class="glyphicon glyphicon-music glyphicon-index"></span>
                <br/>
                <h2 class="small"><span style="background-color: black">Musician</span></h2>
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
                <h2 class="small"><span style="background-color: black">Videographer</span></h2>
              </a>
            </center>
          </div>
          <div class="col-xs-4">
            <center>
              <a href="./aboutme.php">
                <span class="glyphicon glyphicon-user glyphicon-index"></span>
                <br/>
                <h2 class="small"><span style="background-color: black">About Me</span></h2>
              </a>
            </center>
          </div>
          <div class="col-xs-4">
            <center>
              <button type="button" class="btn btn-fake" rel="popover" data-container="body" data-toggle="popover" data-placement="left" data-html="true" data-content="<ul>
                <li>
                  <a href='<?php echo SERESUME ?>' target='_tab'><span class='glyphicon glyphicon-file'></span> Software Engineer Resume</a>
                </li>
                <!-- <li>
                  <a href='<?php echo AERESUME ?>' target='_tab'><span class='glyphicon glyphicon-file'></span> Audio Engineer Resume</a>
                </li> -->
                <!-- <li>
                  <a href='./docs/CV.pdf' target='_tab'><span class='glyphicon glyphicon-file'></span> CV</a></li>
                <li> -->
                  <a href='./publications.php'><span class='glyphicon glyphicon-folder-close'></span> Publications</a>
                </li>
                <li>
                  <a href='./presentations.php'><span class='glyphicon glyphicon-folder-close'></span> Presentations</a>
                </li>
              </ul>">
                <span class="glyphicon glyphicon-folder-close glyphicon-index"></span>
                <br/>
                <h2 class="small"><span style="background-color: black">Documents</span></h2>
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
        } else {
          video.pause();
        }
      }
    </script>
  </body>

</html>