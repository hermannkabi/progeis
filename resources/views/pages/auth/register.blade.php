<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loo konto</title>
</head>
<body>
    @if($errors->any())
    <p style="color: red">{{ implode('', $errors->all(':message')) }}</p>
    @endif
    <form action="{{ route("registerPost") }}" method="post">
        @csrf
        <input type="text" autocomplete="name" name="name" placeholder="Nimi" required> 
        <input type="email" autocomplete="email" name="email" placeholder="E-post" required>
        <input type="password" autocomplete="new-password" name="password" placeholder="Parool" required>
        <input type="password" autocomplete="new-password" name="password_confirmation" placeholder="Kinnita parool" required>

        <button type="submit">Loo konto</button>
    </form>
</body>
</html>