<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class student_payment extends Model
{
    //
    protected $fillable = [
        "student_id",
        "payment_type",
        "course_fee"
    ];
}