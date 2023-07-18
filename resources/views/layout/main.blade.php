<?php
    require(resource_path('core\index.php'));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/brands.min.css" crossorigin="anonymous"/>
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://kit.fontawesome.com/de8ebcc49f.js" crossorigin="anonymous"></script>
    <title>My Pixel Art</title>
</head>
<body>
    <nav>
        <div>
            <h1><a href="/">Galeria</a></h1>
        </div>
        <div class="div-icons">
            @if($auth)
                <a href="/upload" alt='upload'><i class="ion-android-upload"></i></a>
                <a href="/logout"><i class="ion-log-out"></i></a>
            @elseif($pathInfoCurrent != "/login" && $pathInfoCurrent != "/about")
                <a href="/about">Sobre</a>
            @elseif($pathInfoCurrent == "/about")
                <a href="/">Voltar</a>
            @endif
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>