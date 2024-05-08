<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $test_name }}</title>
</head>
<body>
    @if(Session::get('info'))
    <p>{{Session::get('info')}}</p>
    @endif
    <h1>{{ $question->question }}</h1>
    <img src="{{ $question->image }}" alt="">
    <form action="" method="post">
        @csrf
        @if($question->choices == null)
            <input type="text" placeholder="Sisesta vastus" name="choice">
        @else
            @foreach (explode(";", $question->choices) as $choice)
                <div class="choice">
                    <input type="radio" name="choice" id="{{$choice}}" value="{{$choice}}" required>
                    <label for="{{$choice}}">{{$choice}}</label>
                </div>
            @endforeach
        @endif

        <button>Järgmine küsimus</button>
    </form>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> 
    <script>
        $(".choice").click(function (){
            if($(">input[type='checkbox']", this).is(":checked")){
                console.log("Jere");
                
                $("#answer").val($("#answer").val() + ";" + $("> input[type='checkbox']", this).attr("id"));

            }else{
                current_ans = $("#answer").val().split(";");

                if(current_ans.includes($("> input[type='checkbox']", this).attr("id"))){
                    current_ans.splice(current_ans.indexOf($("> input[type='checkbox']", this).attr("id")), 1); 
                }

                $("#answer").val(current_ans.join(";"))
            }

            console.log($("#answer").val());
        });
    </script> -->
</body>
</html>