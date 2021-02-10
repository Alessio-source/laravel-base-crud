<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href = {{ asset("bootstrap/app.css") }} rel="stylesheet" />

        <title>Birre</title>
    </head>
    <body>
        @foreach ($beer as $item)
            <div class="Birra">
                <h2>{{ $item->name }}</h2>
                <p>{{ $item->description }}</p>
            </div>
        @endforeach
    </body>
</html>