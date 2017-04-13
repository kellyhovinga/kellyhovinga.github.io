<header class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="#" class="navbar-brand"></a>
        </div>
        <div id="nav">
        <img id="icon" src="img/raccoonicon.png" alt="Icon">
            <ul class="topnav" id="myTopnav">                
                <li <?php if($fname == 'index.php') {echo 'class="current"';} ?>><a href="index.php">Home</a></li>
                <li <?php if($fname == 'collagepage.php') {echo 'class="current"';} ?>><a href="collagepage.php">Collage</a></li>
                <li <?php if($fname == 'digitalpage.php') {echo 'class="current"';} ?>><a href="digitalpage.php">Digital</a></li>
                <li <?php if($fname == 'aboutpage.php') {echo 'class="current"';} ?>><a href="aboutpage.php">About</a></li>
                <li class="icon">
                <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
            </ul>
        </div>
    </div>
</header>