<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    public function admin() {

        return $this->belongsTo('App\User');

    }

    public function students() {

        return $this->belongsToMany('App\User');

    }

    public function lessons() {

        return $this->hasMany('App\Lesson');

    }

}
