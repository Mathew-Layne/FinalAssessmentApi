<?php

namespace Database\Seeders;

use App\Models\VehicleCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehicleCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = ['Sedan', 'SUV', 'Coupe', 'Luxury', 'Compact', 'Hybrid', 'Sports Car', 'Convertible', 'Wagon', 'Truck'];


        foreach($array as $arr){
            VehicleCategory::create([
                'name' => $arr,
            ]);
        }
    }
}
