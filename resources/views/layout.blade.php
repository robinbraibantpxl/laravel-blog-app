<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{url('css/main.css')}}">
</head>
<body>
<header>
    @include('partials/_navigation')
</header>
<main>
    @includeWhen($errors->any(), 'partials/_errors')
    @if(session('success'))
        <div class="flash-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="main">
        @yield('content')
    </div>
</main>
</body>
</html>
