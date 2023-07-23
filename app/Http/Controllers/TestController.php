<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Test;
use App\Models\Answer;
use App\Models\Chapter;
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
            foreach ($request->questions as $q) {
                foreach ($q['answers'] as $a) {
                    $answer = Answer::find($a);
                    if(!$answer->correct){
                        break;
                    }
                }
                $score+=10;
            }
            Test::create([
                'chapter_id'=>$request->chapter,
                'user_id'=>auth()->id(),
                'note'=>$score
            ]);
            return $this->sendResponse("toto",['score'=>$score.' / 100']);
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
