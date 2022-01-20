<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    public function characters()
    {
        return $this->hasMany(Character::class);
    }
}
