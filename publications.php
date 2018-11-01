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
                <li><a href="./docs/Resume.pdf" target="_tab"><span class="glyphicon glyphicon-file"></span> Resume</a></li>
                <li><a href="./publications.php"><span class="glyphicon glyphicon-folder-open"></span> Publications</a></li>
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
          <h1 class="text-left"><span class="glyphicon glyphicon-folder-open"></span> Publications</h1>
        </div>
          <table class="table table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Author(s)</th>
                <th>Title</th>
                <th>Publisher</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>2</td>
                <td><a href="http://steinhardt.nyu.edu/faculty_bios/view/Agnieszka_Roginska" target="_tab">Agnieszka Roginska</a>, Hariharan Mohanraj, James Keary, <a href="http://www.med.nyu.edu/biosketch/friedk03" target="_tab">Kent Friedman</a></td>
                <td><a href="./docs/SONIFICATION METHOD TO ENHANCE THE DIAGNOSIS OF DEMENTIA.pdf" target="_tab">Sonification Method to Enhance the Diagnosis of Dementia</a></td>
                <td><a href="http://steinhardt.nyu.edu/icad2014/" target="_tab">International Conference on Auditory Display (ICAD) 2014</a>, NY, NY, June 22-25 2014.</td>
              </tr>
              <tr>
                <td>1</td>
                <td>James Keary</td>
                <td><a href="./docs/ThesisDocument_jpk.pdf" target="_tab">A New Technique for Capturing True Coincidence in Ambisonic Microphone Arrays</a></td>
                <td>Masters Thesis, New York University Steinhardt, NY, NY, January 2014.</td>
              </tr>
            </tbody>
          </table>
        
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