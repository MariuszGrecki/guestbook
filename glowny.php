
<?php
require_once("visitor.php");
require_once("database.php");
require_once("main.php");
/*foreach($results as $result){
    
    $gosc = $result["guest"];
    echo $gosc;
    $komentarz = $result["comments"];
    echo $komentarz;
    
}*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/80416e5861.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <script src="plik.js" defer></script> 
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="row text-center">
    <div class="col-lg-7 main">
        <div id="carouselExampleSlidesOnly" class=" my-5 carousel slide bg-secondary " data-ride="carousel">
                 <div class="carousel-inner">
                    <div class="carousel-item active">
                <p class="h2">Witamy</p>
                <p class="h3">To nasza ksiega gosci</p>
                    </div>
                <?php
                    foreach($results as $result){
                     echo '<div class="carousel-item">';
                    $gosc = $result["guest"];
                    echo '<p class="h2">'.$gosc. '</p>';
                    $komentarz = $result["comments"];
                    echo '<p class="h3">'.$komentarz. '</p>';
                    echo '</div>';
                    }
                ?>
                    
                </div>
                </div>
                </div>
    <div class="my-5 col-lg-5 ">
            <form action="insert.php"  method="post" class="second">
                    <div class="input-group w-75 p-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-signature"></i></span>
                        <input type="text" class="form-control input__one" aria-label="Username" aria-describedby="basic-addon1" name="guest"
                        placeholder="Twoje imię">
                    </div>
                    <div class="input-group w-75 p-3">
                        <span class="input-group-text"><i class="fas fa-comment"></i></span>
                        <textarea class="form-control input__second"" aria-label="With textarea" rows="6" placeholder="Treść wiadomości" name="comments"></textarea>
                    </div>
                    <input class="input__submit btn btn-primary" type="submit" />
            </form>

    </div>
</div>


    <p>No to zaczynamy!</p>
    <p>Licznik Odwiedzin:<?php echo $visits; ?></p>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>
</html>