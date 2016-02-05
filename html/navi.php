<!-- HEADER ANFANG -->
<div class="myHeader jumbotron">
    <img src="/Computerspital/images/logo-computerspital.jpg">
    <span>Für uns gibt es keine Probleme, nur Lösungen</span>
</div>
<!-- HEADER ENDE -->

<!-- NAVIGATION ANFANG -->
<nav id="myNav" data-spy="affix" data-offset-top="98" class="navbar navbar-default navbar-inverse" >
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#mynavbar" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/Computerspital/index.php">Computerspital</a>
        </div>
        <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="nav navbar-nav">
                <li class="<?php if($currentPage == 'aktionen'){echo 'active';} ?>"> <a href="/Computerspital/index.php">aktionen <span class="sr-only">(current)</span></a></li>
                <li class="<?php if($currentPage == 'produkteUndLeistung'){echo 'active';} ?>"> <a href="/Computerspital/html/produkteUndLeistung.php">produkte & leistungen</a></li>
                <li class="<?php if($currentPage == 'partner'){echo 'active';} ?>"> <a href="/Computerspital/html/partner.php">partner</a></li>
                <li class="<?php if($currentPage == 'kontakt'){echo 'active';} ?>"> <a href="/Computerspital/html/kontakt.php">kontakt</a></li>
            </ul>
        </div>
    </div>
</nav>


<!-- NAVIGATION ENDE -->