<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typology extends Model
{
    use HasFactory;

    // relazione molti a molti tra typologies e restaurants
    public function restaurants()
    {
        return $this->belongsToMany(Restaurant::class);
    }
}
