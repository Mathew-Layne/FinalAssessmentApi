<?php

namespace Database\Seeders;

use App\Models\VehicleBrand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehicleBrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = ['Toyota', 'Volkswagen', 'Ford', 'Chevrolet', 'Lincoln', 'Kia', 'Cadillac', 'Mazda', 'Mercedes-Benz', 'Range Rover', 'Nissan'];

        foreach($array as $arr){
            VehicleBrand::create([
                'name' => $arr,
            ]);
        }
    }
}
