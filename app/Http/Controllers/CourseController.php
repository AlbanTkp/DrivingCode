<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
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
    public function show(Course $course)
    {
        $cs = Course::whereChapter_id($course->chapter_id)->get();
        $previous_id = 0;
        $next_id = 0;
        foreach($cs as $k=>$c){
            if($c->id == $course->id){
                if($k > 0){
                    $previous_id = $cs[$k-1]->id;
                }
                if($k+1 < $cs->count()){
                    $next_id = $cs[$k+1]->id;
                }
                break;
            }
        }
        $data = [
            'course'=>$course,
            'previous_id'=>$previous_id,
            'next_id'=>$next_id
        ];

        return view('pages.course', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}
