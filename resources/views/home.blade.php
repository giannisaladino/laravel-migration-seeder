<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trains</title>
    <!-- Styles -->
    @vite('resources/js/app.js')
</head>
<body>
    <div class="container">
        <div class="row">
            @foreach ($trains as $train )
                <h1>{{ $train->stazione_di_arrivo }}</h1>
            @endforeach
        </div>
    </div>
</body>
</html>