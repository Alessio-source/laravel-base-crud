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

        <main class="container p-5">
        @foreach ($beer as $item)
            <div class="Birra">
                <h2>{{ $item->name }}</h2>
                <p>{{ $item->description }}</p>
                <a class="btn btn-info" href="{{ route('beer.edit', $item->id) }}">Modifica</a>
                
                <form action="{{ route('beer.destroy', $item->id) }}" method="post" class="mt-1">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-info">Cancella</button>
                </form>
            </div>

            <hr>
        @endforeach

        <a class="btn btn-info" href="{{ route('beer.create') }}">Aggiungi</a>
        </main>
    </body>
</html>