<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    public function clients(){
        return $this->belongsToMany(Client::class);
    }

    public function provider(){
        return $this->belongsTo(Provider::class);
    }
}
