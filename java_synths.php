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
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-folder-close"> </span> Docs<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="./docs/CV_2014.pdf" target="_tab"><span class="glyphicon glyphicon-file"></span> CV</a></li>
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

    	<div class="container" style="max-width:90%">
        
      	<div class="page-header-custom">
      	  <h1 class="text-left"><a href="./programmer.php"><span class="glyphicon glyphicon-phone" data-toggle="tooltip" data-placement="bottom" title="back to programmer page"></span></a> Java Synthesizers</h1>
      	</div>

        <br/>

        <div class="panel-group" id="accordion">
          <div class="panel panel-default"> 
            <button class="close" data-dismiss="alert" type="button">
              <span aria-hidden="true">&times;</span>
              <span class="sr-only">Close</span>
            </button>    
            <div class="panel-heading">                     
              <h4 class="panel-title"><a data-toggle="collapse"data-parent="#accordion" href="#collapseOne">Having problems running this application?</a></h4>
            </div>                     
            <div id="collapseOne" class="panel-collapse collapse">                         
              <div class="panel-body">
                - <b>This application works best on Safari and Firefox</b><br/>
                - <b>If you're getting the Error Message <i>Application blocked by Security Settings</i></b> then you need to set your computer's Java Security Level setting to Medium.  On a mac, go to System Preferences -> Java -> Security, to change the setting.  I'm not sure how to do it on a PC, but I am assuming its similar.
              </div>
            </div>                 
          </div>                   
        </div> <!--accordian--> 

        <p class-"lead_li">These 2 web based applications are musical synthesizers, programmed in Java.  Make sure your speakers are not too loud, click the hit buttons, and have fun playing with the sliders.</p>
         
          <div class="row">
            <div class="col-sm-6"> 
              <h4 class="text-center">Squeak Instrument</h4>

              <applet code="keary.applets.Squeeks_SynthNote_Applet.class" 
                codebase="./classes"
                archive="jsyn-beta-16.6.4.jar"
                width="100%"
                height="350px"
                class="center_video_pad"
              >
                you need a Java enabled Web browser to view this applet
              </applet>              
            </div>
          
            <div class="col-sm-6"> 
              
                <h4 class="text-center">Saw Wave Oscillator Instrument</h4>
                <applet code="keary.applets.MySawTritoImpApplet.class" 
                  codebase="./classes"
                  archive="jsyn-beta-16.6.4.jar"
                  width="100%"
                  height="350px"
                  class="center_video_pad" 
                >
                  you need a Java enabled Web browser to view this applet
                </applet>
              
            </div>
            
            <br/>
          
          </div>
	
      </div> <!--container-->

    </div> <!--wrap-->

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
    <!--Tooltip-->
    <script>
      $(document).ready(function (){
        $('.tooltip-use').tooltip({
          selector: "[data-toggle=tooltip]",
          container: "body"
        })
     });
    </script>  
  
  </body>

</html>