<?php

namespace App\Models;

use App\Models\Course;
use App\Models\Question;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Chapter extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function courses(): HasMany
    {
        return $this->hasMany(Course::class);
    }

    public function tests(): HasMany
    {
        return $this->hasMany(Test::class);
    }

    public function questions(): HasMany
    {
        return $this->hasMany(Question::class);
    }

    public function topics(): HasMany
    {
        return $this->hasMany(Topic::class);
    }
}
