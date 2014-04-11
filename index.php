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

  <body style="padding-top:0px">
    <?php include_once("analyticstracking.php") ?>
    <div id="wrap">

      <div class="container" style="max-width:800px">   
        
        <div class="page-header">
          <h1 class="maintitle text-center"><a href="/">James Keary</a></h1>
        </div>
        
        <div class="row">
          <div class="col-lg-12">  
            <p style="text-align:center">Welcome to my portfolio.  The site is a work in progress.  Thanks<p>
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
                <h2 class="small">Programmer</h2>
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
              <button type="button" class="btn btn-fake" rel="popover" data-container="body" data-toggle="popover" data-placement="right" data-html="true" data-content="<ul><li><a href='./docs/Resume2014_forweb.pdf' target='_tab'><span class='glyphicon glyphicon-file'></span> Resume</a></li><li><a href='./docs/ThesisDocument_jpk.pdf' target='_tab'><span class='glyphicon glyphicon-file'></span> NYU Masters Thesis</a></li></ul>">
                <span class="glyphicon glyphicon-file glyphicon-index"></span>
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
        <p class="text-muted text-center">Site by James Keary &#169 2014 | <a class="btn btn-xs btn-info" href="./contact.php" role="button">Contact Me</a></p>
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
  </body>

</html>