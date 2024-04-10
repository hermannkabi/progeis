<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Töölaud</title>
</head>
<body>
    <h1>Tere, {{ Auth::user()->name }}</h1>
    <a href="{{route('logout')}}">Logi välja</a>


    <p>Siia tulevad testid ja tulemused</p>
</body>
</html>