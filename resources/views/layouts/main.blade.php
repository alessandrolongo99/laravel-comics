<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>DC Comics | @yield('title')</title>
</head>

<body>
    @include('includes.header')

    <main>
        <div class="container py-5">
            @yield('main-content')
        </div>
    </main>

</body>

</html>