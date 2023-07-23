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

        $data = [
            'chapter'=>$chapter
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
        $chapter = Chapter::find($id);
        $chapter->{'banner'} = $chapter->courses[0]->files[0]->path;
        $q = $chapter->questions()->inRandomOrder()->with('answers')->take(10)->get();
        $data = [
            'questions'=>$q,
            'chapter'=>$chapter,
            'duration'=>30
        ];
        return view('pages.test', $data);
    }
}
