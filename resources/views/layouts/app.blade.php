<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - liveWireFS </title>
    @livewireStyles
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.1/dist/alpine.min.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;400;600&display=swap');
        body {
            font-family: 'Montserrat', sans-serif;
        }
    </style>

</head>

<body>

    @livewire("header")

    <div class="container mt-4">
        {{ $slot }}
    </div>

    @livewireScripts
</body>

</html>