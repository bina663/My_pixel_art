<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/brands.min.css" crossorigin="anonymous"/>
    <link rel="stylesheet" href="/css/style.css">
    
    <title>Image Bank</title>
</head>
<body>
    <nav class="nav p-4 bg-dark d-flex justify-content-end">
        <a class="text-decoration-none fs-4 text-white" href="/upload">Image upload</a>
    </nav>
    <div class="container bg-gray p-5 d-flex">
        @yield('content')
    </div>
</body>
</html>