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

    public function updateProfile(Request $request)
    {
        $auth = auth()->user();
        if($request->has('level')){
            $request->validate([
                'level' => ['string', 'in:'.LEVEL_EASY.','.LEVEL_MEDIUM.','.LEVEL_HARD],
            ],[
                'level.in'=>'Niveau de difficulté inconnu',
            ]);
            $auth->fill([
                'level'=>$request->level,
            ]);
            $msg = 'Niveau de difficulté mis à jour';
        }else{
            $request->validate([
                'lastname' => ['required', 'string', 'max:255'],
                'firstname' => ['required', 'string', 'max:255'],
                'tel' => ['required', 'string', 'max:255', 'unique:users,tel,'.$auth->id],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$auth->id],
            ],[
                'lastname.required'=>'Le nom est requis',
                'firstname.required'=>'Le prénom est requis',
                'tel.required'=>'Le numéro de téléphone est requis',
                'tel.unique'=>'Ce numéro de téléphone est déja utilisé',
                'email.required'=>'L\'email est requis',
                'email.email'=>'Email invalide',
                'email.unique'=>'Cet email est déja utilisé',
            ]);

            $auth->fill([
                'lastname'=>$request->lastname,
                'firstname'=>$request->firstname,
                'email'=>$request->email,
                'tel'=>$request->tel,
            ]);
            $msg = 'Informations modifiées avec succès';
        }
        $auth->save();
        $flash = [
            'title'=>'Succès',
            'type'=>'success',
            'msg'=>$msg
        ];
        session()->flash( 'alert',$flash);
        return redirect()->route('profile');
    }

    public function stats(){

        return view('pages.stats');
    }
}
