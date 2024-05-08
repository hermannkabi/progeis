<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use App\Models\Question;


class TestController extends Controller
{
    public function getTests(){
        return Test::all();
    }

    public function getQuestion($test_id, $quest_nr){
        $question = Question::where("test_id", $test_id)->where("quest_nr", $quest_nr)->first();
        if($question == null){
            abort(404);
        }
        return $question;
    }

    public function answerQuestion(Request $request, $test_id, $quest_nr){
        $question = Question::where("test_id", $test_id)->where("quest_nr", $quest_nr)->first();
        $correct = $question->answer;
        $ans = $request->choice;

        $text = $correct == $ans ? "Õige vastus!" : "Vale, õige oli '".$correct."'";


        $nextQuestion = Question::where("test_id", $test_id)->where("quest_nr", $quest_nr + 1)->first();

        if($nextQuestion != null){
            return redirect("/test/".$test_id."/".($quest_nr + 1))->with(["info"=>$text]);
        }else{
            return redirect()->route("dashboard")->with(["info"=>$text]);
        }

    }

}
