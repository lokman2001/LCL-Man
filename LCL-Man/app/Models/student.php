<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    //
    protected $fillable = [
        "level",
        "student_name",
        "parent_name",
        "phone_number",
        "join_date",
        "end_of_duration",
        "leave_date"
    ];
}