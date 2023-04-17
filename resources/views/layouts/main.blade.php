<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset("assets/styles/vendors/bootstrap/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ URL::asset("assets/styles/main.css") }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <title>{{ $title }}</title>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
    
    <script src="assets/scripts/vendors/bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>