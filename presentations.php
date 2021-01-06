<?php 
  require_once('header.php');
  include_once("analyticstracking.php"); 
  define('PAGE', 'Docs');
  include_once("consts.php");
  include_once("navbar.php");
?>
  <body>
    <div id="wrap">
      <div class="container" style="max-width:1000px">
        <div class="page-header-custom">
          <h1 class="text-left"><span class="glyphicon glyphicon-folder-open"></span> Presentations</h1>
        </div>
          <table class="table table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Presentation (link to PDF)</th>
                <th>Location</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>2</td>
                <td><a href="./docs/Sonification_ICAD2014Talk.pdf" target="_tab">Sonification Method to Enhance the Diagnosis of Dementia</a></td>
                <td><a href="http://steinhardt.nyu.edu/icad2014/" target="_tab">International Conference on Auditory Display (ICAD) 2014</a>, NY, NY, June 22-25 2014.</td>
              </tr>
              <tr>
                <td>1</td>
                <td><a href="./docs/Thesis_Presentation.pdf" target="_tab">A New Technique for Capturing True Coincidence in Ambisonic Microphone Arrays</a></td>
                <td>Masters Thesis Defense, New York University Steinhardt, NY, NY, December 2013.</td>
              </tr>
            </tbody>
          </table>
        
      </div> <!--container-->
  </div> <!--wrap-->