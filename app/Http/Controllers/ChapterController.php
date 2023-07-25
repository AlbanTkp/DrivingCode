<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use Illuminate\Http\Request;

class ChapterController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Chapter $chapter)
    {
        $chapter->load('courses');
        $chapter->{'banner'} = $chapter->courses[0]->files[0]->path;

        $auth = auth()->user();
        switch($auth->level){
            case LEVEL_EASY:
                $nb_q = 5;
                $duration = 5;
                break;
            case LEVEL_MEDIUM:
                $nb_q = 7;
                $duration = 3;
                break;
            case LEVEL_HARD:
                $nb_q = 10;
                $duration = 2;
                break;
        }

        $data = [
            'chapter'=>$chapter,
            'nb_questions'=>$nb_q,
            'duration'=>$duration
        ];
        return view('pages.chapter', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chapter $chapter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Chapter $chapter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chapter $chapter)
    {
        //
    }

    public function test(Request $request, $id){
        $auth = auth()->user();
        switch($auth->level){
            case LEVEL_EASY:
                $nb_q = 5;
                $duration = 5;
                break;
            case LEVEL_MEDIUM:
                $nb_q = 7;
                $duration = 3;
                break;
            case LEVEL_HARD:
                $nb_q = 10;
                $duration = 2;
                break;
        }
        $chapter = Chapter::find($id);
        $chapter->{'banner'} = $chapter->courses[0]->files[0]->path;
        $q = $chapter->questions()->inRandomOrder()->with('answers')->take($nb_q)->get();
        $data = [
            'questions'=>$q,
            'chapter'=>$chapter,
            'duration'=>$duration
        ];
        return view('pages.test', $data);
    }
}
