<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    @vite('resources/css/app.css')
    @stack('styles')

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dog & cat</title>
    <link rel="icon" href="/imgs/LOGO.png">
</head>
<body>
    @yield('content')
</body>
</html>