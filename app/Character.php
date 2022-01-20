<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    public function job()
    {
        return $this->hasOne(Job::class);
    }
}
