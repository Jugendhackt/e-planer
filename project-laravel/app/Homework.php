<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homework extends Model
{

  protected $table = "homework";

    public function course() {

        $this->belongsTo('App\Course');

    }

    public function users() {

        $this->belongsToMany('App\User', 'id', 'user_id');

    }

}
