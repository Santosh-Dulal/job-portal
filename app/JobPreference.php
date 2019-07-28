<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class JobPreference extends Model
{
    public function career(){
        return $this->hasOne(JobPreference::class);
    }
}
