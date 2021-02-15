<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <title>Aggiungi birra</title>
    </head>
    <body>

        <div class="container p-5">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('beer.update', $beer->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $beer->name }}">
                </div>
                <div class="form-group">
                    <label for="description">Descrizione</label>
                    <textarea class="form-control" id="description" name="description" rows="3">{{ $beer->description }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Modifica</button>
                <a class="btn btn-info" href="{{ route('beer.index') }}">Torna alla home</a>
            </form>
        </div>     

    </body>
</html>