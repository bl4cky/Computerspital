<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Kontakt</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/myCss.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5  elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<?php
$currentPage="kontakt";
include ('navi.html');
?>

<div class="container">
    <div class="container" id="main_kontakt">
        <div class="row">
            <h1>Kontakt</h1>
        </div>

        <div class="row">
            <div id="map-container" class="col-md-8"></div>
            <div id="kontakt_info" class="col-md-4">
                <span style="text-transform: uppercase; display: block">TELEFONNUMMER</span>
                <a href="tel:+43 677 8471 123">0677/ 8471 123</a>
            </div>

        </div>
    </div>
</div> <!--Container ENDE-->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../js/bootstrap.min.js"></script>
<!-- Maps API -->
<script src="http://maps.google.com/maps/api/js"></script>
<!--Eigenes Script-->
<script src="../js/myJs.js"></script>

</body>
</html>