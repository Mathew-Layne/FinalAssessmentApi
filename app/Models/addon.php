<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addon extends Model
{
    use HasFactory;

    public function rentedAddon(){
        return $this->hasMany(RentedAddon::class);
    }

    protected $fillable =[
        'name', 
        'price'
    ];
}
