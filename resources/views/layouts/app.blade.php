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

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="{{ route('comics.index') }}">Vai alla lista dei fumetti</a>
                    <a class="nav-item nav-link btn btn-outline-primary" href="{{ route('comics.create') }}">Crea un nuovo fumetto</a>
                </div>
            </div>
        </nav>
        
    </header>
    
    <main>
        @yield('main_content')
    </main>

</body>
</html>