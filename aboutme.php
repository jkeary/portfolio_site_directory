<?php 
  require_once('header.php');
  include_once("analyticstracking.php"); 
  define('PAGE', 'About');
  include_once("consts.php");
  include_once("navbar.php");
?>
<body>
  <div id="wrap">
    <div class="container" style="max-width:1100px">
      <div class="page-header-custom">
        <h1 class="text-left"><span class="glyphicon glyphicon-user"></span> About Me</h1>
      </div>
      <br/>
      <div>
        <p class="lead">
          <img id="aboutMeImg" class="rightimg_lg img-responsive img-rounded" src="./imgs/frend.jpg" align="right"/>
          I am a Software Engineer in Philadelphia, PA with 6+ years experience in web based development. I have a M.M. in Music Tech from NYU. My passions lie in collaborative and creative team problem solving for SaaS web based applications.
          <br><br>
          I am knowledgeable in Javascript, Angularjs, Node.js, React, ES6, Python, PHP, Django, Laravel, MongoDB, MySql, Postgres, SCSS, and Git. I am versed in tools such as Docker, Jenkins, Postman, AWS, Grunt, Yarn/NPM, and Bash. 
          <br><br>
          Other interests include being a performing, writing, touring, and recording musician in my rock band. I have multiple records, including song placements in movies and television. I also have 2 cats.
          <br><br>
          My current <a href='<?php echo SERESUME ?>' target='_tab' align="right">resume</a> has a relevant listing of my software engineering experiences.
          <br><br>
          Feel free to contact me at <a href="mailto:jkeary@gmail.com" target="_blank">jkeary@gmail.com</a>.
        </p> 
      </div>            
    </div><!--container-->
    <br/>
    <div id="like_button_container"></div>
  </div><!--wrap-->
<?php include_once("footer.php") ?>
