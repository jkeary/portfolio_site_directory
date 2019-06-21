<?php require_once('header.php'); ?>

  <body>
    <?php include_once("analyticstracking.php") ?>
    <?php 
      define('PAGE', 'Video');
      include_once("navbar.php");
    ?>

    <div id="wrap">
      <div class="container" style="max-width:790px">

        <div class="page-header-custom">
          <h1 class="text-left"><span class="glyphicon glyphicon-facetime-video"></span> Video</h1>
        </div>

        <br/>

        <div class="container">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="./imgs/coolkidspic.png" alt="Cool Kids Cut Out of the Heart Itself" class="centerimg img-responsive img-rounded">
                <div class="carousel-caption">
                  <h4><a href="./coolkids.php">Cool Kids Cut Out of the Heart Itself - Music Video</a></h4>
                  <p style="text-align:center">Editor, 2010</p>
                </div>
              </div>
              <div class="item">
                <img src="./imgs/allegorypic.png" alt="An Allegory" class="centerimg img-responsive img-rounded">
                <div class="carousel-caption">
                  <h4><a href="./allegory.php">An Allegory - Video Short</a></h4>
                  <p style="text-align:center">Co-Creator, Co-Director, Co-Editor, 2006</p>
                </div>
              </div>
              <div class="item">
                <img src="./imgs/epicureanpic.png" alt="The Epicurean" class="centerimg img-responsive img-rounded">
                <div class="carousel-caption">
                  <h4><a href="./epicurean.php">The Epicurean - Video Short</a></h4>
                  <p style="text-align:center">Co-Creator, Co-Director, Co-Editor, 2006</p>
                </div>
              </div>

          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
        </div><!--carousel--> 
        </div>
      </div><!--container-->
      
      <br/>

    </div><!--wrap-->

    <?php include_once("footer.php") ?>