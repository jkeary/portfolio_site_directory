<?php require_once('header.php'); ?>
  <body>
  	<?php include_once("analyticstracking.php") ?>
		<?php include_once("navbar.php") ?>

    <div id="wrap">

    	<div class="container" style="max-width:100%">
        
        	<div class="page-header-custom">
        	  <h1 class="text-left"><a href="./programmer.php"><span class="glyphicon glyphicon-phone"></span></a> A Sieve Calculator</h1>
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

            <p>
            	This is a musical calculator.  Enter two simple sieves, sieve A and B, and then create a complex sieve through one of the buttons at the bottom.  Press start to hear your composition.  Instructions below.
			</p>

			<applet code="keary.applets.SievesApplet.class" 
				codebase="./classes"
				archive="jmsl.jar,jsyn-beta-16.6.4.jar"
				width="1250px"
				height="410px"
				>
				you need a Java enabled Web browser to view this applet
			</applet>

			<br/><br/> 

			<div class="panel-group" id="accordion">
            	<div class="panel panel-default"> 
            		<div class="panel-heading"> 			        			
						<h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">What the heck is this?</a></h4>
                   	</div>                     
                   	<div id="collapseTwo" class="panel-collapse collapse">                         
                    	<div class="panel-body tooltip-use">
                      	 	This was one of the very first projects I did at NYU MTech and my first attempt at algorithmic composition through computer programming.  I was trying to create a tool for composers, based on the ideas of <a data-toggle="tooltip" data-placement="right" href="#" data-original-title="Sieves are a way of creating complex series of numbers or elements, using modulo arithmatic and boolean algebra. We apply sieves to music all the time: we choose certain combinations of notes over all the other notes, to make up what we call scales and melodies, these are in a sense, sieves. But why do we choose the notes and rhythms that we choose? For instance, why is the major pentatonic scale found to have been created seperately in different cultures throughout history? What does this imply about our individual free will? Sieve theory attempts to open a composers mind to more complex musical ideas through the aid of the most advanced tool of the day, a computer. Ideas that we may never have originally arrived at in the first place are at once at the composers disposal.">Sieve Theory</a>, as established by Stocastic composer <a href="http://www.iannis-xenakis.org/xen/index.html" target="_tab">Iannis Xenakis</a>.  This is a "calculator", in the sense that it <i>computes</i> through mathematical operations, a series of pitches (such as a major scale).  By hitting the play button, you will hear how your series of pitches sounds when placed in a simple predetermined song structure and melody.  <br/><br/>For a complete description of this project, <a href="http://jameskeary.com/docs/A%20Sieve%20Calculator%20Paper.pdf" target="_tab">here</a> is the corresponding paper I wrote that outlines the theory and the applet design.  
						</div>
					</div>
				</div>
				<div class="panel panel-default"> 
					<div class="panel-heading"> 			        			
						<h4 class="panel-title"><a data-toggle="collapse"data-parent="#accordion" href="#collapseThree">What do the text fields and buttons do?</a></h4>
                	</div>
					<div id="collapseThree" class="panel-collapse collapse"> 
						<div class="panel-body">
							<h5>Text Fields : How to create your simple sieves, A and B.</h5>
							<i><b>Modulus</i></b> - The number of notes in a cycle to create the sieves from. Imagine a piano keyboard.  The modulus is always set to start at middle C (C4).  If there are 24 notes in the modulus, then you have 2 octaves (an octave is one 12 note cycle on a keyboard that begins and ends on the same note).  The modulus travels 1 octave above middle C, from C4 to C5, and one octave below, from C4 to C3.  Another example: if the modulus is set to 12, it will go 6 notes above to the F#4 and 6 notes below to the F#3.
							<br/><i><b>Pitch Center</i></b> - The note in the cycle where you want your series to begin.  Unlike the major scale which gives weight to certain notes in the scale, the pitch center has no importance to the group of pitches.  It is meerly a place holder telling the calculator where to start calculating from. 
							<br/><i><b>Residue class</i></b> - The number of pitches per leap around the modulus starting at the pitch center.  The leaps are both intervallic and symmetrical, jumping both above and below the pitch center.  If the residue class is set to 2, it will jump up from middle C to D, skipping C#, and down from middle C to A#, skipping B.  
							<br/><br/><h5>Buttons : Boolean algebra is applied to relate simple sieves to each other to achieve non-symmetrical series of intervals. The Boolean operators are: AND (Intersection); OR (Union) and NOT (Negation).</h5>
							<i><b>Union - Boolean OR</i></b> - Disjunction: takes grouped sieves and uses all their elements to create a complex sieve.  
							<br/><i><b>Intersection - Boolean AND</i></b> - Conjunction: takes like elements from the grouped sieves. 
							<br/><i><b>Negation - Boolean NOT</i></b> - Complimentary: takes no elements one simple sieve, and only uses elements outside of that series.
							<br/><i><b>Store</i></b> - Not a Boolean operator, takes the complex sieve from Sieve C and stores it in A or B.  Gives the potential for more complicated sieves.  
						</div>
					</div>                 
				</div>   
				<div class="panel panel-default"> 
					<div class="panel-heading"> 			        			
						<h4 class="panel-title"><a data-toggle="collapse"data-parent="#accordion" href="#collapseFour">Can I see the code?</a></h4>
                	</div>
					<div id="collapseFour" class="panel-collapse collapse"> 
						<div class="panel-body">     
							Sure!  The full potential of this idea has yet to be unleashed.  Sieves can be applied to any musical elements that come in a group, which are basically ALL musical elements; durations, velocities, pitches, chords, amplitudes, etc.  This appliet only uses sieves for defining groups of pitches, and nothing more.  I have made the applet available for download through my github account linked below.  Feel free to play around with the code and develope the idea! 

							<br/><br/>

							<a href="https://github.com/jkeary/Sieve-Calculator" target="_tab">Download the applet</a>     
						</div>
					</div>
				</div>
            </div> <!--accordian-->	

		</div> <!--container-->

	</div> <!--wrap-->