<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Address extends Model
{
    use hasFactory;

    protected $fillable = [
        'user_id',
        'address',
        'country',
        'province',
        'city',
        'district',
        'postal_code',
        'is_default',
    ];

    //user
    public function user(){
        return $this->belongsTo(User::class);
    }
}
