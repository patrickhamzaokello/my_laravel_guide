<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>First App</title>

    <style>
        .active{
            color: red;
        }

        img{
            width: 200px;
            height: 200px;
        }
    </style>
</head>
<body>

    <header>
        @include('layouts.header')
    </header>

    @yield('content')

   
    <section>
        @include('layouts.footer')
    </section>
    
</body>
</html>