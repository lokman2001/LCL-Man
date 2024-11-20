<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class interviewee extends Model
{
    //
    protected $fillable = [
        "name",
        "skill",
        "salary",
        "phone"
    ];
}
