<?php require_once('header.php'); ?>
  <body>
    <?php include_once("analyticstracking.php") ?>
    <?php 
      define('PAGE', 'Docs');
      include_once("navbar.php") 
    ?>

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

  <?php include_once("footer.php") ?>