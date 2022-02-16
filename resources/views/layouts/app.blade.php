<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page_title')</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <header>
        <a href="{{ route('comics.index') }}">Torna alla lista dei fumetti</a>
        <a href="{{ route('comics.create') }}">Crea un nuovo fumetto</a>
    </header>
    
    <main>
        @yield('main_content')
    </main>

</body>
</html>