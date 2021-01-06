<?php require_once('header.php'); ?>
  <body>
  	<?php include_once("analyticstracking.php") ?>
    <?php include_once("navbar.php") ?>

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