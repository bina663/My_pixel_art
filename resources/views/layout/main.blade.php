<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/brands.min.css" crossorigin="anonymous"/>
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://kit.fontawesome.com/de8ebcc49f.js" crossorigin="anonymous"></script>
    <title>Image Bank</title>
</head>
<body>
    <nav class="navbar bg-body-tertiary bg-dark">
        <div class="container-fluid p-2">
            <h1 class="display-4 text-light">Gallery</h1>
            <a class="text-decoration-none fs-1 text-white" href="/upload" alt='upload'><i class="ion-ios-cloud-upload-outline fw-bold"></i></a>
        </div>
    </nav>
    <div class="container bg-gray p-5 d-flex">
        @yield('content')
    </div>
</body>
</html>