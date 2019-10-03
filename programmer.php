<?php 
  require_once('header.php');
  include_once("analyticstracking.php"); 
  define('PAGE', 'Code');
  include_once("consts.php");
  include_once("navbar.php");
?>
<body>
  <div id="wrap">

    <div class="container" style="max-width:1100px">
      
      <div class="page-header-custom">
        <h1 class="text-left"><span class="glyphicon glyphicon-phone"></span> Software Engineer</h1>
      </div>
      <br/>

      <a href="https://codeforphilly.org/projects/prevention_point_unified_reporting_system" target="_blank">
        <div class="projentry">
          <div id="imgwrapper">
            <img src="imgs/preventionpoint.png" class="img-responsive img-rounded" alt="Responsive image">
          </div>
          <div id="contentwrapper">
            <h2>Code for Philly - Prevention Point</h2>
            <p><a></a>Currently I am voluntering my coding skills on a <a href="https://codeforphilly.org/" target="_blank">Code for Philly</a> project.  Code for Philly is the Philadelphia chapter of <a href="https://brigade.codeforamerica.org/" target="_blank">Code for America</a>, a national alliance of community organizers, coders and designers working to service local communities.  The current project that I am working on is the <a href="https://codeforphilly.org/projects/prevention_point_unified_reporting_system" target="_blank">Prevention Point Unified Reporting System</a> project.  Prevention Point is a non profit needle exchange program servicing the Philadelphia area.  On this project I have been working as the Lead Front End Engineer.  The front end tech stack is <a href="https://reactjs.org/" target="_blank">React JS</a> with <a href="https://mobx.js.org/" target="_blank">Mobx</a> for state management, leveraging <a href="https://material-ui.com/" target="_blank">Material-UI</a>'s premade design components.  The code for this open source project can be found at their github <a href="https://github.com/CodeForPhilly/prevention-point" target="_blank">here</a>.
          </div>
        </div>
      </a>

      <a href="https://www.crowdskout.com" target="_blank">
        <div class="projentry">
          <div id="imgwrapper">
            <img src="imgs/crowdskout.png" class="img-responsive img-rounded" alt="Responsive image">
          </div>
          <div id="contentwrapper">
            <h2>Crowdskout</h2>
            <p><a></a>Crowdskout is a Washington DC based political advocacy and digital marketing tech start.  I  worked there for almost 5 years, from August 2014 to June 2019.  This is where I learned to be a Web Software Engineer.  For a list of my duties including technologies I use on a daily basis, please take a look at my <a href="<?php echo SERESUME ?>" target="_blank">resume</a>.</p>
          </div>
        </div>
      </a>

      <a href="https://github.com/jkeary/modern-notion" target="_blank">
        <div class="projentry">
          <div id="imgwrapper">
            <img src="imgs/modernnotiondesktop.png" class="img-responsive img-rounded" alt="Responsive image">
          </div>
          <div id="contentwrapper">
            <h2>Modern Notion</h2>
            <p><a></a>Modern Notion was a pop history and science website from 2014 - 2016.  I was sole developer for this project.  The front end was done in ReactJS with SCSS, and the back was built using Wordpress's PHP Framework.  Clicking anywhere will take you to the codebase on github.</p>
          </div>
        </div>
      </a>

      <a href="https://github.com/crowdskout/crowdskout-wp" target="_blank">
        <div class="projentry">
          <div id="imgwrapper">
            <img src="imgs/wordpress.png" class="img-responsive img-rounded" alt="Responsive image">
          </div>
          <div id="contentwrapper">
            <h2>Crowdskout Wordpress Plugin</h2>
            <p><a></a>Developed the Crowdskout Wordpress plugin for my current employeer, Crowdskout.  It was an early version of the tracking code that is now part of the Crowdskout Web Application.  This code was written in PHP and Javascript using the Wordpress PHP framework and the SVN code management tool.  This plugin is now defunct.</p>
          </div>
        </div>
      </a>

      <!-- <a href="java_synths.php">
        <div class="projentry">
          <div id="imgwrapper">
            <img src="imgs/JSynProjsPic.png" class="img-responsive img-rounded" alt="Responsive image">
          </div>
          <div id="contentwrapper">
            <h2>Java Synthesizers Applications</h2>
            <p><a></a>These simple synthesizer web based applications were created in Java using <a href="http://www.softsynth.com/wire/" target="_tab">Wire</a>, a graphical patch editor, and <a href="http://www.softsynth.com/jsyn/" target="_tab">JSyn</a>, Java's audio synthesis API.</p>
          </div>
        </div>
      </a> -->

      <a href="soni_gui_proj.php">
        <div class="projentry">
          <div id="imgwrapper">
            <img src="imgs/interactivesonification.png" class="img-responsive img-rounded" alt="Responsive image">
          </div>
          <div id="contentwrapper">
            <h2>Medical Sonification Software in SuperCollider</h2>
            <p><a></a>Interactive software I developed while working on the <a href="http://jameskeary.com/sonification_proj.php" target="_tab">Medical Imaging Sonification</a> research project at NYU Steinhardt.  Coding was done in SuperCollider, Csound, Matlab and C++ for this project.  Click <a href="https://github.com/jkeary/sonification_gui" target="_blank">here</a> for the code.</p>
          </div>
        </div>
      </a>

    <!--   <a href="sieves_proj.php">
        <div class="projentry">
          <div id="imgwrapper">
            <img src="imgs/SievesProjPic.png" class="img-responsive img-rounded" alt="Responsive image">
          </div>
          <div id="contentwrapper">
            <h2>Java Musical Calculator Application</h2>
            <p><a></a>Written in Java, this is my first real attempt at algorithmic composition.  Based on Greek stochastic composer <a href="http://www.iannis-xenakis.org/xen/index.html" target="_tab">Iannis Xenakis</a>'s sieve theory, this web based application was written in Java, using the JMSL API.  The idea behind the project was to create a tool for the modern day composer: a musical calculator.</p>
          </div>
        </div>
      </a>     --> 

      <a href="https://github.com/jkeary" target="_tab">
        <div class="projentry">
          <div id="imgwrapper">
            <img src="https://og.github.com/octocat/github-octocat@1200x630.png" class="img-responsive img-rounded" alt="Responsive image" >
          </div>
          <div id="contentwrapper">
            <h2>My Github account</h2>
            <p><a></a>Clicking this link will take you to my Github account.  This showcases my work in Digital Signal Processing algorithms, GUI design and development, and even the code for this website.  I am constantly updating my github account with new projects that I have worked on.</p>
          </div>
        </div>
      </a>

      </div>
  </div>
  <br/>
  
<?php include_once("footer.php") ?>