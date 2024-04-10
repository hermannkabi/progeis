<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logi sisse</title>
</head>
<body>
    <form action="{{ route("loginPost") }}" method="post">
        @csrf
        <input name="email" type="email" placeholder="E-post">
        <input name="pwd" type="password" placeholder="Parool">

        <button type="submit">Logi sisse</button>
    </form>
</body>
</html>