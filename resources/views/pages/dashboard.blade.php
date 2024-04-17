<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Töölaud</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/dashboard.css">

</head>
<body>
    <script>
        console.log("{{ $tests }}");
    </script>
    <h1 class="name">Tere, {{ Auth::user()->name }}!</h1>

    <div class="cards">
    @forelse ($tests as $test)
        <div class="card">
            <img src="{{ $test->img }}" alt="">
            <div class="info">
                <h2>{{ $test->name }}</h2>

                <div class="additional-info">
                    <p>10 küsimust</p>
                    <p>60p</p>
                </div>
            </div>

        </div>

    @empty
        <p>Teste pole</p>
    @endforelse

    </div>
</body>
</html>