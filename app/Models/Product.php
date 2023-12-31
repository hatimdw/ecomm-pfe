<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function format()
    {
        return number_format($this->price);
    }
    public function scopeRandomProducts($query)
    {
        return $query->inRandomOrder()->take(4);
    }

}
