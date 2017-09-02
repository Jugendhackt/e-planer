<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    public function users() {

        return $this->belongsToMany('App\User');

    }

    public function lessons() {

        return $this->hasMany('App\Lesson');

    }

}
