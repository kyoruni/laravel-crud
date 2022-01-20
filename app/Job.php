<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    public function character()
    {
        return $this->hasOne(Character::class);
    }
}
