<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logi sisse</title>
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/login.css">
</head>
<body>

    <div class="placement">
        <div class="container">
            <div class="content">
                <form action="{{ route("loginPost") }}" method="post">
                    @csrf
                    <input style="transform: rotate(180deg);" name="email" type="email">
                    <input class="kallutatud" name="password" type="password">
                    <button type="submit"></button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>