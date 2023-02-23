<?php

namespace App\Models;

use App\Models\Character;
use App\Models\Developer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Game extends Model
{
    use HasFactory;

    public function characters(){
        return $this->belongsToMany(Character::class);
    }

    public function developer(){
        return $this->belongsTo(Developer::class);
    }
}
