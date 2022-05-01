<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function vehicle(){
        return $this->belongsTo(Vehicle::class);
    }

    public function rentedAddon(){
        return $this->hasMany(RentedAddon::class);
    }

    protected $fillable =[
        'pickup_location',
        'pickup_date',
        'dropoff_location',
        'dropoff_date',
        'user_id',
        'vehicle_id'
    ];
}
