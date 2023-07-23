<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\Chapter;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $chapters = Chapter::with(['courses.files','questions','topics'])->get();
        foreach ($chapters as $key => $chapter) {
            $duration = 0;
            $banner=null;
            foreach ($chapter->courses as $course) {
                $duration+=$course->duration;
                if($banner == null){
                    $banner = $course->files[0]->path;
                }
            }
            $minutes = 221;

            // Calcul du nombre d'heures et du nombre de minutes
            $h = intdiv($duration, 60);
            $m = str_pad($duration % 60, 2, '0', STR_PAD_LEFT);
            $duration = ($h>0? str_pad($h % 60, 2, '0', STR_PAD_LEFT).'h':'').$m."min";
            $chapters[$key]->{'duration'} = $duration;
            $chapters[$key]->{'banner'} = $banner;
        }
        $data = [
            'chapters'=>$chapters,
            'duration'=>30
        ];
        return view('pages.home', $data);
    }


    public function profile(){

        return view('pages.profile');
    }

    public function stats(){

        return view('pages.stats');
    }
}
