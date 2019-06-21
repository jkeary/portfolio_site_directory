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
                <?php 
                    if ('About' === PAGE) {
                        echo 
                            '<li><a href="./sounddesigner.php"><span class="glyphicon glyphicon-headphones"></span> Sound</a></li>
                            <li><a href="./programmer.php"><span class="glyphicon glyphicon-phone"></span> Code</a></li>
                            <li><a href="./musician.php"><span class="glyphicon glyphicon-music"></span> Music</a></li>
                            <li><a href="./videographer.php"><span class="glyphicon glyphicon-facetime-video"></span> Video</a></li>
                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-folder-close"></span> Docs<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="./docs/Resume2019.pdf" target="_tab"><span class="glyphicon glyphicon-file"></span> Software Engineer Resume</a></li>
                                <li><a href="./publications.php"><span class="glyphicon glyphicon-folder-close"></span> Publications</a></li>
                                <li><a href="./presentations.php"><span class="glyphicon glyphicon-folder-close"></span> Presentations</a></li>
                            </ul>
                            </li>
                            <li class="active"><a href="./aboutme.php"><span class="glyphicon glyphicon-user"></span> About</a></li>';
                    } elseif ('Music' === PAGE) {
                        echo 
                            '<li><a href="./sounddesigner.php"><span class="glyphicon glyphicon-headphones"></span> Sound</a></li>
                            <li><a href="./programmer.php"><span class="glyphicon glyphicon-phone"></span> Code</a></li>
                            <li class="active"><a href="./musician.php"><span class="glyphicon glyphicon-music"></span> Music</a></li>
                            <li><a href="./videographer.php"><span class="glyphicon glyphicon-facetime-video"></span> Video</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-folder-close"></span> Docs<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="./docs/Resume2019.pdf" target="_tab"><span class="glyphicon glyphicon-file"></span> Software Engineer Resume</a></li>
                                    <li><a href="./publications.php"><span class="glyphicon glyphicon-folder-close"></span> Publications</a></li>
                                    <li><a href="./presentations.php"><span class="glyphicon glyphicon-folder-close"></span> Presentations</a></li>
                                </ul>
                            </li>
                            <li><a href="./aboutme.php"><span class="glyphicon glyphicon-user"></span> About</a></li>';
                    } elseif ('Sound' === PAGE) {
                        echo 
                            '<li class="active"><a href="./sounddesigner.php"><span class="glyphicon glyphicon-headphones"></span> Sound</a></li>
                            <li><a href="./programmer.php"><span class="glyphicon glyphicon-phone"></span> Code</a></li>
                            <li><a href="./musician.php"><span class="glyphicon glyphicon-music"></span> Music</a></li>
                            <li><a href="./videographer.php"><span class="glyphicon glyphicon-facetime-video"></span> Video</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-folder-close"></span> Docs<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="./docs/Resume2019.pdf" target="_tab"><span class="glyphicon glyphicon-file"></span> Software Engineer Resume</a></li>
                                    <li><a href="./publications.php"><span class="glyphicon glyphicon-folder-close"></span> Publications</a></li>
                                    <li><a href="./presentations.php"><span class="glyphicon glyphicon-folder-close"></span> Presentations</a></li>
                                </ul>
                            </li>
                            <li><a href="./aboutme.php"><span class="glyphicon glyphicon-user"></span> About</a></li>';
                    } elseif ('Code' === PAGE) {
                        echo 
                            '<li><a href="./sounddesigner.php"><span class="glyphicon glyphicon-headphones"></span> Sound</a></li>
                            <li class="active"><a href="./programmer.php"><span class="glyphicon glyphicon-phone"></span> Code</a></li>
                            <li><a href="./musician.php"><span class="glyphicon glyphicon-music"></span> Music</a></li>
                            <li><a href="./videographer.php"><span class="glyphicon glyphicon-facetime-video"></span> Video</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-folder-close"></span> Docs<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="./docs/Resume2019.pdf" target="_tab"><span class="glyphicon glyphicon-file"></span> Software Engineer Resume</a></li>
                                    <li><a href="./publications.php"><span class="glyphicon glyphicon-folder-close"></span> Publications</a></li>
                                    <li><a href="./presentations.php"><span class="glyphicon glyphicon-folder-close"></span> Presentations</a></li>
                                </ul>
                            </li>
                            <li><a href="./aboutme.php"><span class="glyphicon glyphicon-user"></span> About</a></li>';
                    } elseif ('Video' === PAGE) {
                        echo 
                            '<li><a href="./sounddesigner.php"><span class="glyphicon glyphicon-headphones"></span> Sound</a></li>
                            <li><a href="./programmer.php"><span class="glyphicon glyphicon-phone"></span> Code</a></li>
                            <li><a href="./musician.php"><span class="glyphicon glyphicon-music"></span> Music</a></li>
                            <li class="active"><a href="./videographer.php"><span class="glyphicon glyphicon-facetime-video"></span> Video</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-folder-close"></span> Docs<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="./docs/Resume2019.pdf" target="_tab"><span class="glyphicon glyphicon-file"></span> Software Engineer Resume</a></li>
                                    <li><a href="./publications.php"><span class="glyphicon glyphicon-folder-close"></span> Publications</a></li>
                                    <li><a href="./presentations.php"><span class="glyphicon glyphicon-folder-close"></span> Presentations</a></li>
                                </ul>
                            </li>
                            <li><a href="./aboutme.php"><span class="glyphicon glyphicon-user"></span> About</a></li>';
                    } elseif ('Docs' === PAGE) {
                        echo 
                            '<li><a href="./sounddesigner.php"><span class="glyphicon glyphicon-headphones"></span> Sound</a></li>
                            <li><a href="./programmer.php"><span class="glyphicon glyphicon-phone"></span> Code</a></li>
                            <li><a href="./musician.php"><span class="glyphicon glyphicon-music"></span> Music</a></li>
                            <li><a href="./videographer.php"><span class="glyphicon glyphicon-facetime-video"></span> Video</a></li>
                            <li class="dropdown active">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-folder-close"></span> Docs<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="./docs/Resume2019.pdf" target="_tab"><span class="glyphicon glyphicon-file"></span> Software Engineer Resume</a></li>
                                    <li><a href="./publications.php"><span class="glyphicon glyphicon-folder-close"></span> Publications</a></li>
                                    <li><a href="./presentations.php"><span class="glyphicon glyphicon-folder-close"></span> Presentations</a></li>
                                </ul>
                            </li>
                            <li><a href="./aboutme.php"><span class="glyphicon glyphicon-user"></span> About</a></li>';
                    } else {
                        echo 
                            '<li><a href="./sounddesigner.php"><span class="glyphicon glyphicon-headphones"></span> Sound</a></li>
                            <li><a href="./programmer.php"><span class="glyphicon glyphicon-phone"></span> Code</a></li>
                            <li><a href="./musician.php"><span class="glyphicon glyphicon-music"></span> Music</a></li>
                            <li><a href="./videographer.php"><span class="glyphicon glyphicon-facetime-video"></span> Video</a></li>
                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-folder-close"></span> Docs<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="./docs/Resume2019.pdf" target="_tab"><span class="glyphicon glyphicon-file"></span> Software Engineer Resume</a></li>
                                <li><a href="./publications.php"><span class="glyphicon glyphicon-folder-close"></span> Publications</a></li>
                                <li><a href="./presentations.php"><span class="glyphicon glyphicon-folder-close"></span> Presentations</a></li>
                            </ul>
                            </li>
                            <li><a href="./aboutme.php"><span class="glyphicon glyphicon-user"></span> About</a></li>';
                    }
                ?>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>