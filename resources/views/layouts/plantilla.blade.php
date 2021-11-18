<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="../sass/custom.css">
    <script src="https://kit.fontawesome.com/9a9a14a5ae.js" crossorigin="anonymous"></script>
</head>
<body>

    @include('layouts.partials.header')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    @include('layouts.partials.nav')

    @yield('content')  
    
    @include('layouts.partials.footer')
</body>
</html>