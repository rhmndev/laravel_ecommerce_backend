<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'seller_id',
        'category_id',
        'name',
        'description',
        'price',
        'stock',
        'image',
        'is_active',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function seller(){
        return $this->belongsTo(User::class);
    }
}
