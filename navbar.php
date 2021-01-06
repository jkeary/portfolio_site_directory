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
                <?php 
                    include_once("consts.php"); 
                    $lis = [
                        'Sound' => '<a href="./sounddesigner.php"><span class="glyphicon glyphicon-headphones"></span> Sound</a>',
                        'Code' => '<a href="./programmer.php"><span class="glyphicon glyphicon-phone"></span> Code</a>',
                        'Music' => '<a href="./musician.php"><span class="glyphicon glyphicon-music"></span> Music</a>',
                        'Video' => '<a href="./videographer.php"><span class="glyphicon glyphicon-facetime-video"></span> Video</a>',
                        'Doc' => '<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-folder-close"></span> Docs<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="'.SERESUME.'" target="_tab"><span class="glyphicon glyphicon-file"></span> Software Engineer Resume</a></li>
                            <li><a href="./publications.php"><span class="glyphicon glyphicon-folder-close"></span> Publications</a></li>
                            <li><a href="./presentations.php"><span class="glyphicon glyphicon-folder-close"></span> Presentations</a></li>
                        </ul>',
                        'About' => '<a href="./aboutme.php"><span class="glyphicon glyphicon-user"></span> About</a>'
                    ];
                    // Create the navbar
                    $navbar = '';
                    foreach ($lis as $pageName => $li) {
                        $liClasses = "class=";
                        if (PAGE === $pageName) {
                            $liClasses .= "active "; 
                        }
                        if ("Docs" === $pageName) {
                            $liClasses .= "dropdown";
                        }
                        if ("class=" === $liClasses) {
                            $liClasses = "";
                        }
                        $navbar .= "<li ".$liClasses.">".$li."</li>";
                    }
                    // print the navbar on the page
                    echo $navbar;
                ?>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>