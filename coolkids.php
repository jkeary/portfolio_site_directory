<?php 
  require_once('header.php');
  include_once("analyticstracking.php"); 
  define('PAGE', '');
  include_once("navbar.php");
?>
<body>
  <div id="wrap">
    <div class="container">
      <div class="page-header-custom">
        <h1 class="text-left"><a href="./videographer.php" data-toggle="tooltip" data-placement="bottom" title="back to video page"><span class="glyphicon glyphicon-facetime-video"></span></a> Cool Kids Cut Out of the Heart Itself</h1>
      </div>
      <p class="lead_md"><a href="http://miniboone.com/" target="_tab">Miniboone</a>'s first music video, released 2010.  Editor.</p>
      <video class="center_video" width="80%" height="auto" controls>
        <source src="./video/Cool_Kids_1280x720px_HD.mp4" type="video/mp4">
        <source src="./video/Cool_Kids_1280x720px_HD.ogg" type="video/ogg">
        Your browser does not support the video tag.
      </video>
    </div><!--container-->
  </div><!--wrap-->
<?php include_once("footer.php") ?>