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

</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 px-0"> <!-- Add the px-0 class here -->
            <x-sidebar></x-sidebar> <!-- Include the sidebar component here -->
        </div>
        <div class="col-md-9">
            <div class="container">
                @yield('content')
            </div>
        </div>
    </div>
</div>
</body>
</html>
