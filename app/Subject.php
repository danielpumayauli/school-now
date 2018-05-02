<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Course;

class Subject extends Model
{
    // 1 tema pertenece a 1 curso

    public function course()
    {
    	return $this->belongsTo(Course::class);
    }
}
