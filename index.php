<?php
 $userIP = $_SERVER['REMOTE_ADDR'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ipstack API</title>
    <meta name="description" content="">
    <meta name="author" content="Faraj Daoud">
    <meta name="keywords" content="ipstack API example IP Address Information">
    <meta name="robots" content="index, follow">
    <link rel="shortcut icon" href="favicon.ico?v=1.1" type="image/ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.16/b-1.5.1/b-colvis-1.5.1/b-flash-1.5.1/b-html5-1.5.1/b-print-1.5.1/cr-1.4.1/fh-3.1.3/kt-2.3.2/r-2.2.1/sc-1.4.4/datatables.min.css"/>
    <link href="css/main.css?v=1.1" rel='stylesheet'>
</head>
<body>
    
    <nav class="navbar navbar-expand-md navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="http://farajdaoud.com">Faraj Daoud</a>
      
            <button class="navbar-toggler" id="nav-bar-hamburger" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded ="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
      
            <div class="collapse navbar-collapse justify-content-md-center" id="navbar-menu">
                <ul class="nav navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link mr-3" href="http://farajdaoud.com/#findMeDiv">Find Me</a></a>
                    </li>
                    <li>
                        <a class="nav-link mr-3" href="http://farajdaoud.com/#portfolio">Portfolio</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>ipstack API</h1>
                <hr>
                <p>IP information is provided by <a href="https://ipstack.com/" target="_blank">ipstack API</a>.</p>
                <p>Click here for the <a href="https://developers.google.com/maps/" target="_blank">Google Map API</a>.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div id="apiResponseDiv" class="row">
                    
                </div>
            </div>
        </div>
    </div>
    
    <div class="hidden">
        <p id="userIP"><?php echo $userIP; ?></p> 
    </div>
    
</div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJsSd0Y6OZJhe791EtP2sIzPT8tBAb8nM&callback=initMap"
  type="text/javascript"></script>
    <script src="js/main.js?v=1.1" type="text/javascript" ></script>
</body>
</html>