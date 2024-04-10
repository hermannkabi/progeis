<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logi sisse</title>
</head>
<body>
    @if($errors->any())
    <p style="color: red">{{ implode('', $errors->all(':message')) }}</p>
    @endif


    <form action="{{ route("loginPost") }}" method="post">
        @csrf
        <input name="email" type="email" placeholder="E-post">
        <input name="password" type="password" placeholder="Parool">
        <input type="checkbox" name="remember" id="remember">
        <label for="remember">Jäta meelde</label>
        <button type="submit">Logi sisse</button>
    </form>
    <a href="{{route('register')}}">Loo konto</a>
</body>
</html>