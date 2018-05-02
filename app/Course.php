<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Subject;

class Course extends Model
{
    // 1 curso tiene muchos temas

    public function subjects()
    {
    	return $this->hasMany(Subject::class);
    }
}
 