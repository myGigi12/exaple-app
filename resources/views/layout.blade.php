<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap5/css/bootstrap.min.css">
</head>
<body>
    <div class="d-flex justify-content-center my-5 bg-secondary p-2">
        <a href="{{ route ('post.add') }} " class="btn btn-light me-2 ">Add Post</a>
        <a href="{{ route ('all-post') }} " class="btn btn-light me-2 ">All Post</a>

    </div>

    @yield('content')


</body>
</html>


