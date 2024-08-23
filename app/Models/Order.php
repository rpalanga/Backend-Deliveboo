<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    // relazione dishes con orders (molti-a-molti)
    public function dishes() {
        return $this->belongsToMany(Dish::class);
    }
}