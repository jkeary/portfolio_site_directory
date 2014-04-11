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

    	<div class="container" style="max-width:1200px">
        
        	<div class="page-header-custom">
        	  <h1 class="text-left"><a href="./programmer.php"><span class="glyphicon glyphicon-phone"></span></a> A Sieve Calculator</h1>
        	</div>
	
	        <br/> 
	
            <div class="panel-group" id="accordion">                  
            	<div class="panel panel-default">  
            		<div class="panel-heading">
						<h4 class="panel-title"><a data-toggle="collapse"data-parent="#accordion" href="#collapseOne">Sieve Theory</a></h4>
                    </div>                     
                    <div id="collapseOne" class="panel-collapse collapse">                         
                     	<div class="panel-body">
                        	Sieves are a way of creating complex series of numbers or elements, 
                        	using modulo arithmatic and boolean algebra. We apply sieves to music all
							the time: we choose certain combinations of notes over all the other
							notes, to make up what we call scales and melodies, these are in a sense,
							sieves. But why do we choose the notes and rhythms that we choose? For
							instance, why is the major pentatonic scale found to have been created
							seperately in different cultures throughout history? What does this imply
							about our individual free will? Sieve theory attempts to open a composers mind
							to more complex musical ideas through the aid of the most advanced tool of the
							day, a computer. Ideas that we may never have originally arrived at in the
							first place are at once at the composers disposal. Sieves can be applied to
							any musical elements that come in a group, which are basically ALL musical
							elements; durations, velocities, pitches, chords, amplitudes, etc.
						</div>
					</div>                 
				</div>                 
				<div class="panel panel-default">                     
					<div class="panel-heading">
						<h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Sieve Calculator Instructions</a></h4>
					</div>
					<div id="collapseTwo" class="panel-collapse collapse">
						<div class="panel-body">                             
							With the sieve calculator, the user is able to create a complex group of 
							pitches from 2 simple sieves and to hear those pitches in a melody.  The 
							song structure and melody have been predetermined for this particular 
							calculator. Enter two simple sieves and then create a complex sieve.  Press 
							start to hear your composition.<br/><br/>The <i>modulus</i> is the number of
							notes in a cycle to create the sieves from. The modulus is set to start at C.
							If there are 12 notes in the modulus, you have 1 octave. The <i>pitch center
							</i> is defined as the note in the modulus where you want your series of notes 
							to begin; it has no importance to it besides a place marker. The <i>residue 
							class</i> is the number of pitches per leap around the modulus starting at the
							pitch center, the leaps are both intervallic and symmetrical, jumping both above
							and below the pitch center.<br/><br/>Boolean algebra is applied to relate simple 
							sieves to each other to achieve non-symmetrical series of intervals. The Boolean 
							operators to use are: AND (intersection); OR (union) and NOT (negation). OR, 
							meaning union or disjunction, takes grouped sieves and uses all their elements 
							to create a complex sieve. AND, meaning intersection or conjunction, takes like 
							elements from the grouped sieves. NOT meaning complimentary or negation, takes 
							no elements one simple sieve, and only uses elements outside of that series.
	       				</div>
	    			</div>
	  			</div>
				<div class="panel panel-default">
	    			<div class="panel-heading">
	      				<h4 class="panel-title">
	       					<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Code</a>
	      				</h4>
	    			</div>
	    			<div id="collapseThree" class="panel-collapse collapse">
	      				<div class="panel-body">
	      					The project was written in Java. I used the JMSL API to compose
	      					the musical elements of the piece not under the user's control,
	      					i.e. the song and rhythmic structure. Those musical elements are
	      					based on the Nirvana song <i>Smells Like Teen Spirit</i>. The 
	      					sieve class itself is separate from the JMSL applet.  This was done
	      					so that newer functionalities could be added in the future, and so
	      					that it has the ability to be implemented by other classes, outside
	      					of this project.  If you perhaps wish to make your own musical 
	      					calculator here are the sieve objects.<br/><br/>
	      					<button class="btn btn-success" data-toggle="modal" data-target=".bs-modal-lg">Sieve.java</button>
							<div class="modal fade bs-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  								<div class="modal-dialog modal-lg">
								    <div class="modal-content">
								    	<code><pre>
//Xenakis Sieve java object by James Keary.  Creates a sieve that modulates around a cycle of elements.  
The sieve object maintains a collection of methods that can be called upon and acted out by other programs / applet.

package keary.applets;

import com.softsynth.jmsl.JMSLRandom;

public class Sieve {

	// create an array of boolean values
	public boolean[] isMember;

	public Sieve(int length) {
		isMember = new boolean[length];
		for (int i = 0; i < length; i++) {
			isMember[i] = true;
		}
	}

	// finds length of your array
	public int length() {
		return isMember.length;
	}

	// counts the number of members of your array.  members being those elements of your sieve that are chosen.
	public int count() {
		int numMembers = 0;
		for (int i = 0; i < length(); i++) {
			if (isMember[i]) {
				numMembers++;
			}
		}
		return numMembers;
	}

	// negate method is used when only using the contents of 1 sieve.
	public void negate() {
		for (int i = 0; i < length(); i++) {
			isMember[i] = !isMember[i];
		}
	}
		
	// filter method is determining the starting pitch and the interval leaps around the modulus.
	public void filter(int start, int leap) {
		for (int i = 0; i < length(); i++) {
			isMember[i] = ((i % leap) == start);
		}
	}
	
	// chooseValue method to determine how values are chosen from the sieve.
	public int chooseValue() {
		int randNum = JMSLRandom.choose(0, count() - 1);
		int numMembers = 0;
		for (int i = 0; i < length(); i++) {
			if (isMember[i]) {
				numMembers++;
				if (randNum < numMembers) {
					return i;
				}
			}
		}
		return -1;
	}

	public String toString() {
		String elements = "";
		for (int i = 0; i < length(); i++) {
			if (isMember[i]) {
				elements += i + " ";
			}
		}
		return elements;
	}
	
	// union method is boolean operator to combine sieves.  Union means every element from both sieves is used
	public static Sieve union(Sieve a, Sieve b) {
		if (a.length() != b.length())
			return null;

		Sieve result = new Sieve(a.length());
		for (int i = 0; i < a.length(); i++) {
			result.isMember[i] = a.isMember[i] || b.isMember[i];
		}
		return result;

	}
	
	// intersect method is boolean operator to only use common elements from both sieves.
	public static Sieve intersect(Sieve a, Sieve b) {
		if (a.length() != b.length())
			return null;

		Sieve result = new Sieve(a.length());
		for (int i = 0; i < a.length(); i++) {
			result.isMember[i] = a.isMember[i] && b.isMember[i];
		}
		return result;
	}
	// minus method removes all of b's elements from a and return resulting Sieve
		public static Sieve minus(Sieve a, Sieve b) {
			if (a.length() != b.length())
				return null;

			Sieve result = new Sieve(a.length());
			for (int i = 0; i < a.length(); i++) {
				result.isMember[i] = a.isMember[i] && ! b.isMember[i];
			}
			return result;
		}
		
		// clone method
		public Sieve clone() {
			Sieve d = new Sieve(length());
		
			for(int i = 0; i < length(); i++) {
				d.isMember[i] = isMember[i]; 
			}
			return d;
		}
}
										</code></pre>								    
									</div>								
								</div>
							</div>
							<button class="btn btn-success" data-toggle="modal" data-target=".bs-modal-lg">Sieve.class</button>
							<div class="modal fade bs-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  								<div class="modal-dialog modal-lg">
								    <div class="modal-content">
								    	<code><pre>
package keary.applets;

public class Sieve extends java.lang.Object
{
    /* Fields */
    public boolean[] isMember;

    /* Constructors */
    public Sieve(int) {
    }


    /* Methods */
    public int length() {
    }

    public int count() {
    }

    public void negate() {
    }

    public void filter(int, int) {
    }

    public int chooseValue() {
    }

    public java.lang.String toString() {
    }

    public static keary.applets.Sieve union(keary.applets.Sieve, keary.applets.Sieve) {
    }

    public static keary.applets.Sieve intersect(keary.applets.Sieve, keary.applets.Sieve) {
    }

    public static keary.applets.Sieve minus(keary.applets.Sieve, keary.applets.Sieve) {
    }

    public keary.applets.Sieve clone() {
    }

    public java.lang.Object clone() throws java.lang.CloneNotSupportedException {
    }

}

										</code></pre>								    
									</div>								
								</div>
							</div>
	       				</div>
	    			</div>
	  			</div>
			</div> <!--accordian-->

			<applet code="keary.applets.SievesApplet.class" 
				codebase="./classes"
				archive="jmsl.jar,jsyn-beta-16.4.4.jar"
				width="1170px"
				height="410px"
				>
				you need a Java enabled Web browser to view this applet
			</applet>

		<br/> <br/> 
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
  
  </body>

</html>