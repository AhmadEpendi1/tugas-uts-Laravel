<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
@vite(['resources/css/app.css', 'resources/js/app.js'])


<body>
<div class="container py-4">
    @yield('content')
</div>
</body>
</html>
