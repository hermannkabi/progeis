<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loo konto</title>
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/register.css">
</head>
<body>
    
        <div class=jama>
            <form action="{{ route("registerPost") }}" method="post">
                @csrf
                <input type="password" autocomplete="new-password" name="password_confirmation" placeholder="Gmail" required>
                <input type="email" class="kallutatud" autocomplete="email" name="email" required>
                <button type="submit"></button>
                <input style="transform: scaleX(2.8) scaleY(2) translate(-50px, 0px);" type="text" autocomplete="name" name="name"  required> 
                <input type="password" autocomplete="new-password" name="password"  required>
            </form>
        </div>
    <div class="container"></div>
</body>
</html>