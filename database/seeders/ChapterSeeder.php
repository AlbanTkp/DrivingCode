<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\Topic;
use App\Models\Lesson;
use App\Models\Chapter;
use App\Models\Reponse;
use App\Models\Chapitre;
use App\Models\Course;
use App\Models\CourseFile;
use App\Models\Question;
use App\Models\Simulation;
use App\Models\LessonFichier;
use Illuminate\Database\Seeder;
use App\Models\SimulationFichier;
use App\Models\SimulationFile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ChapterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Chapter::factory()
        ->count(8)
        ->has(
            Topic::factory()
            ->count(6)
            ->state(function (array $attributes, Chapter $chapter) {
                return ['chapter_id' => $chapter->id];
            })
        )
        ->has(
            Question::factory()
            ->count(80)
            ->state(function (array $attributes, Chapter $chapter) {
                return ['chapter_id' => $chapter->id];
            })
            ->has(
                Answer::factory()
                ->count(random_int(3,4))
                ->state(function (array $attributes, Question $question) {
                    return ['question_id' => $question->id];
                })
            )
        )
        ->has(
            Course::factory()
            ->count(random_int(10,12))
            ->state(function (array $attributes, Chapter $chapter) {
                return ['chapter_id' => $chapter->id];
            })
            ->has(
                CourseFile::factory()
                ->count(random_int(1,2))
                ->state(function (array $attributes, Course $course) {
                    return ['course_id' => $course->id];
                }),'files'
            )
            ->has(
                Simulation::factory()
                ->count(random_int(5,6))
                ->state(function (array $attributes, Course $course) {
                    return ['course_id' => $course->id];
                })
                ->has(
                    SimulationFile::factory()
                    ->count(random_int(1,2))
                    ->state(function (array $attributes, Simulation $simulation) {
                        return ['simulation_id' => $simulation->id];
                    }),'files'
                )
            )
        )
        ->create();

        Question::all()->each(function (Question $question) {
            // $correct_answers_count = random_int(1, 2);
            $correct_answers_count = 1;
            $answers = $question->answers()->inRandomOrder()->take($correct_answers_count)->get();
            $answers->each(function (Answer $answer) {
                $answer->update(['correct' => true]);
            });
        });

    }
}
