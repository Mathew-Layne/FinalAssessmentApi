<?php

namespace Database\Seeders;

use App\Models\Vehicle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        Vehicle::upsert([
            [
                'name' => 'Corolla',
                'transmission' => 'Auto',
                'mileage' => 1546,
                'fuel' => 'Diesel',
                'year' => 2020,
                'img' => 'https://www.avis.com/content/dam/cars/xl/2020/toyota/2020-toyota-corolla-le-sedan-grey_featured.png',
                'price' => 50,
                'vehicle_brand_id' => 1,
                'vehicle_category_id' => 1 
        ],[
            'name' => 'Jetta',
            'transmission' => 'Auto',
            'mileage' => 6566,
            'fuel' => 'Diesel',
            'year' => 2020,
            'img' => 'https://www.avis.com/content/dam/cars/xl/2021/volkswagen/2021-volkswagen-jetta-s-sedan-silver_featured.png',
            'price' => 50,
            'vehicle_brand_id' => 2,
            'vehicle_category_id' => 1 
        ],[
            'name' => 'Tahoe',
            'transmission' => 'Manual',
            'mileage' => 5626,
            'fuel' => 'Diesel',
            'year' => 2019,
            'img' => 'https://www.avis.com/content/dam/cars/xl/2021/chevrolet/2021-chevrolet-tahoe-lt-4wd-suv-black_featured.png',
            'price' => 60,
            'vehicle_brand_id' => 4,
            'vehicle_category_id' => 2 
        ],[
            'name' => 'Edge',
            'transmission' => 'Auto',
            'mileage' => 22556,
            'fuel' => 'Gasoline',
            'year' => 2021,
            'img' => 'https://www.avis.com/content/dam/cars/xl/2020/ford/2020-ford-edge-st-4wd-suv-grey_featured.png',
            'price' => 60,
            'vehicle_brand_id' => 3,
            'vehicle_category_id' => 2 
        ],[
            'name' => 'Corvette',
            'transmission' => 'Manual',
            'mileage' => 8326,
            'fuel' => 'Diesel',
            'year' => 2022,
            'img' => 'https://www.avis.com/content/dam/cars/xl/2019/chevrolet/2019-chevrolet-corvette-stingray-2lt-targa-silver_featured.png',
            'price' => 55,
            'vehicle_brand_id' => 4,
            'vehicle_category_id' => 3 
        ],[
            'name' => 'Continental',
            'transmission' => 'Manual',
            'mileage' => 6454,
            'fuel' => 'Gasoline',
            'year' => 2019,
            'img' => 'https://www.avis.com/content/dam/cars/xl/2020/lincoln/2020-lincoln-continental-reserve-sedan-black_featured.png',
            'price' => 50,
            'vehicle_brand_id' => 5,
            'vehicle_category_id' => 4 
        ],[
            'name' => 'Soul',
            'transmission' => 'Auto',
            'mileage' => 4854,
            'fuel' => 'Diesel',
            'year' => 2021,
            'img' => 'https://www.avis.com/content/dam/cars/xl/2021/kia/2021-kia-soul-s-5door-hatchback-black_featured.png',
            'price' => 45,
            'vehicle_brand_id' => 6,
            'vehicle_category_id' => 5 
        ],[
            'name' => 'Escalade',
            'transmission' => 'Manual',
            'mileage' => 1548,
            'fuel' => 'Gasoline',
            'year' => 2022,
            'img' => 'https://www.avis.com/content/dam/cars/xl/2021/cadillac/2021-cadillac-escalade-esv-sport-suv-white_featured.png',
            'price' => 60,
            'vehicle_brand_id' => 7,
            'vehicle_category_id' => 2 
        ],[
            'name' => 'Camry',
            'transmission' => 'Auto',
            'mileage' => 1546,
            'fuel' => 'Diesel',
            'year' => 2021,
            'img' => 'https://www.avis.com/content/dam/cars/xl/2021/toyota/2021-toyota-camry-se-sedan-black_featured.png',
            'price' => 50,
            'vehicle_brand_id' => 1,
            'vehicle_category_id' => 1 
        ],[
            'name' => 'Passat',
            'transmission' => 'Auto',
            'mileage' => 9564,
            'fuel' => 'Diesel',
            'year' => 2022,
            'img' => 'https://www.avis.com/content/dam/cars/xl/2021/volkswagen/2021-volkswagen-passat-se-sedan-black_featured.png',
            'price' => 50,
            'vehicle_brand_id' => 2,
            'vehicle_category_id' => 1 
        ],[
        'name' => 'C300',
        'transmission' => 'Manual',
        'mileage' => 1245,
        'fuel' => 'Diesel',
        'year' => 2022,
        'img' => 'https://www.avis.com/content/dam/cars/xl/2021/mercedes/2021-mercedes-c-class-300-sedan-gray_featured.png',
        'price' => 55,
        'vehicle_brand_id' => 9,
        'vehicle_category_id' => 1 
    ],[
        'name' => 'Prius Hybrid',
        'transmission' => 'Auto',
        'mileage' => 4553,
        'fuel' => 'Gasoline',
        'year' => 2019,
        'img' => 'https://www.avis.com/content/dam/cars/xl/2021/toyota/2021-toyota-prius-le-hybrid-4wd-5door-hatchback-silver_featured.png',
        'price' => 45,
        'vehicle_brand_id' => 1,
        'vehicle_category_id' => 6 
    ]   
     ], [
         'name', 
         'transmission',     
         'fuel', 
         'year', 
         'img', 
         'price',
         'vehicle_brand_id', 
         'vehicle_category_id'  
        ],[
            'mileage'
        ]);        
    }
}
