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
    <h1 style="margin-bottom: 0" class="name">Tere, {{ Auth::user()->name }}!</h1>
    <a style="margin: 8px 0 36px 24px; color: red; text-decoration:none;" href="{{route('logout')}}">logi välja</a>
    @if(Session::get('info'))
    <p style="margin-left: 24px">{{Session::get('info')}}</p>
    @endif
    <div class="cards" style="margin-top: 36px">
    @forelse ($tests as $test)
        <div class="card" onclick="window.location.href = '/test/{{ $test->id }}/0'">
            <img src="{{ $test->img }}" alt="">
            <div class="info">
                <h2>{{ $test->name }}</h2>

                <div class="additional-info">
                    <p> -</p>
                    <p>{{(random_int(1, 60) + random_int(1, 60))/2}}p</p>
                </div>
            </div>

        </div>

    @empty
        <p>Teste pole</p>
    @endforelse

    </div>
</body>
</html>