<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class interview_quize_q extends Model
{
    //
    protected $fillable = [
        'quize_id',
        'question',
        'correct_answer',
        'answer1',
        'answer2',
        'answer3',
        'answer4',
    ];
}
