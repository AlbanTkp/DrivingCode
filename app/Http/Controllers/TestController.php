<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Test;
use App\Models\Answer;
use App\Models\Badge;
use App\Models\Chapter;
use App\Models\Reward;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $score = 0;
            $per_q = 100 / count($request->questions);
            foreach ($request->questions as $q) {
                $c = true;
                foreach ($q['answers'] as $a) {
                    $answer = Answer::find($a);
                    if(!$answer->correct){
                        $c = false;
                        break;
                    }
                }
                if($c == true){
                    $score+=$per_q;
                }
            }
            $auth = auth()->user();
            Test::create([
                'chapter_id'=>$request->chapter,
                'user_id'=>$auth->id,
                'level'=>$auth->level,
                'score'=>$score
            ]);
            $new_badge = false;
            $nb = Test::where('score','>=',70)
            ->where('level', $auth->level)
            ->where('user_id', $auth->id)
            ->count();

            if($score >= 70){
                if($auth->level == LEVEL_EASY){
                    $label1 = "CONDUCTEUR NOVICE";
                    $label2 = "APPRENTI ENDURCI";
                }elseif($auth->level == LEVEL_MEDIUM){
                    $label1 = "CHAUFFEUR";
                    $label2 = "CONTROLEUR ROUTIER";
                }elseif($auth->level == LEVEL_HARD){
                    $label1 = "MAITRE DE LA ROUTE";
                    $label2 = "AS DE LA ROUTE";
                }

                if($nb == 1){
                    $new_badge = true;
                    $b = Badge::whereTitle($label1)->first();
                    Reward::create([
                        'user_id'=>$auth->id,
                        'badge_id'=>$b->id
                    ]);
                }elseif($nb == 10){
                    $new_badge = true;
                    $b = Badge::whereTitle($label2)->first();
                    Reward::create([
                        'user_id'=>$auth->id,
                        'badge_id'=>$b->id
                    ]);
                }
            }

            return $this->sendResponse(
                "toto",
                [
                    'score'=>$score.' / 100',
                    'new_badge'=>$new_badge,
                    'nb'=>$nb
                ]);
        }catch(Exception $e){
            return $this->sendError($e->getMessage());
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Test $test)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Test $test)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Test $test)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Test $test)
    {
        //
    }


}
