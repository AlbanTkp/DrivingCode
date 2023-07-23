<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('rewards',function(Blueprint $table){
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('badge_id')->references('id')->on('badges')->cascadeOnDelete()->cascadeOnUpdate();
        });
        Schema::table('tests',function(Blueprint $table){
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('chapter_id')->references('id')->on('chapters')->cascadeOnDelete()->cascadeOnUpdate();
        });
        Schema::table('courses',function(Blueprint $table){
            $table->foreign('chapter_id')->references('id')->on('chapters')->cascadeOnDelete()->cascadeOnUpdate();
        });
        Schema::table('questions',function(Blueprint $table){
            $table->foreign('chapter_id')->references('id')->on('chapters')->cascadeOnDelete()->cascadeOnUpdate();
        });
        Schema::table('topics',function(Blueprint $table){
            $table->foreign('chapter_id')->references('id')->on('chapters')->cascadeOnDelete()->cascadeOnUpdate();
        });
        Schema::table('simulations',function(Blueprint $table){
            $table->foreign('course_id')->references('id')->on('courses')->cascadeOnDelete()->cascadeOnUpdate();
        });
        Schema::table('course_files',function(Blueprint $table){
            $table->foreign('course_id')->references('id')->on('courses')->cascadeOnDelete()->cascadeOnUpdate();
        });
        Schema::table('answers',function(Blueprint $table){
            $table->foreign('question_id')->references('id')->on('questions')->cascadeOnDelete()->cascadeOnUpdate();
        });
        Schema::table('simulation_files',function(Blueprint $table){
            $table->foreign('simulation_id')->references('id')->on('simulations')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('rewards',function(Blueprint $table){
            $table->dropForeign('rewards_user_id_foreign');
            $table->dropForeign('rewards_badge_id_foreign');
        });
        Schema::table('tests',function(Blueprint $table){
            $table->dropForeign('tests_user_id_foreign');
            $table->dropForeign('tests_chapitre_id_foreign');
        });
        Schema::table('questions',function(Blueprint $table){
            $table->dropForeign('questions_chapitre_id_foreign');
        });
        Schema::table('courses',function(Blueprint $table){
            $table->dropForeign('courses_chapitre_id_foreign');
        });
        Schema::table('topics',function(Blueprint $table){
            $table->dropForeign('topics_chapitre_id_foreign');
        });
        Schema::table('simulations',function(Blueprint $table){
            $table->dropForeign('simulations_course_id_foreign');
        });
        Schema::table('course_files',function(Blueprint $table){
            $table->dropForeign('course_files_course_id_foreign');
        });
        Schema::table('answers',function(Blueprint $table){
            $table->dropForeign('answers_question_id_foreign');
        });
        Schema::table('simulation_files',function(Blueprint $table){
            $table->dropForeign('simulation_files_simulation_id_foreign');
        });
    }
};
