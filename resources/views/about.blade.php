<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Twotter</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="jumbotron col-12">
            <p class="display-4">Twotter is a very cool app designed to keep in touch with people, koalas and/or pandas.</p>
            <hr class="my-4">
            <a href="{{ url('/') }}">Back</a>
        </div>
    </div>

    <div class="row">
        <h1 class="display-3">Happy clients</h1>
    </div>
    <br>
    <div class="row">
        <div class="card col-sm-12 col-md-4">
            <img class="card-img-top" src="http://exitm41.tcp-innovation.fr/wp-content/uploads/2015/07/panda-roux-c-zoo-de-lyon-350x350.jpg">
            <div class="card-block">
                <h4 class="card-title">Roo</h4>
                <p class="card-text">Roo roo. Panda roo.</p>
            </div>
        </div>

        <div class="card col-sm-12 col-md-4">
            <img class="card-img-top" src="https://www.wendywutours.co.uk/resource/upload/1033/panda-friends.jpg">
            <div class="card-block">
                <h4 class="card-title">Panda</h4>
                <p class="card-text">Also a panda but not the same.</p>
            </div>
        </div>

        <div class="card col-sm-12 col-md-4">
            <img class="card-img-top" src="http://r.fod4.com/c=sq/s=w350,pd1/o=80/http://a.fod4.com/images/user_photos/1246056/779d0b85e11cceb505f3310e0d0d87de_original.jpg" style="transform: rotate(180deg);">
            <div class="card-block">
                <h4 class="card-title">Koala</h4>
                <p class="card-text">Koala koala koala koala koala</p>
            </div>
        </div>
    </div>

</div>
</body>
</html>