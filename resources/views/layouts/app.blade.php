<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <x-fontawesome></x-fontawesome>
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])
    <style>
        .footer {
            width: 100%;
            position: absolute;
            bottom: 0;
            left: 0;
        }
    </style>

</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 px-0">
            @livewire('sidebar')
        </div>
        <div class="col-md-7">
            <div class="container">
                @yield('content')
            </div>
        </div>
    </div>
</div>
<footer class="footer text-center">
    <x-footer></x-footer>
</footer>
</body>
</html>
