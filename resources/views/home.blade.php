<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <title>Birre</title>
    </head>
    <body>

        <main class="container">
        @foreach ($beer as $item)
            <div class="Birra">
                <h2>{{ $item->name }}</h2>
                <p>{{ $item->description }}</p>
            </div>
        @endforeach

        <a class="btn btn-info" href="{{ route('create') }}">Aggiungi</a>
        </main>
    </body>
</html>