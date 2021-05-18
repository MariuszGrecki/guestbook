<?php

/*error_reporting(E_ALL ^ E_WARNING && E_ALL ^ E_NOTICE );*/

require_once('database.php');


$gosc = pg_escape_string($_POST["guest"]) ;
$komentarz= pg_escape_string($_POST["comments"]) ;

$conString = "host='$host' dbname='$dbName' user='$user' password='$pass'";
$con = pg_connect($conString);

$query = "INSERT INTO komentarze (guest, comments)
VALUES ('$gosc', '$komentarz')";

$r = pg_query($query);

$results = pg_fetch_all($r);



pg_close($con);

header("refresh:3;url=glowny.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="main text-center">
        <div id="carouselExampleSlidesOnly" class=" my-5 carousel slide bg-secondary " data-ride="carousel">
                 <div class="carousel-inner">
                    <div class="carousel-item active">
                <p class="h2">Dziękujemy!</p>
                <p class="h3">Twój komentarz został dodany!</p>
                    </div>        
        </div>
    </div>
    
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>