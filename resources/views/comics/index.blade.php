<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <main>

        <h1>Lista di fumetti</h1>
        
        @foreach ($comics as $comic)
            <h3><a href="#">{{ $comic->title }}</a></h3>
            <div>Serie: {{ $comic->series }}</div>
        @endforeach

    </main>

</body>
</html>