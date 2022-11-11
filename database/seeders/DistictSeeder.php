<?php

namespace Database\Seeders;

use App\Models\Distict;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DistictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $disticts = [
            'Dhaka',
            'Faridpur',
            'Gazipur',
            'Gopalganj',
            'Jamalpur',
            'Kishoreganj',
            'Madaripur',
            'Manikganj',
            'Munshiganj',
            'Mymensingh',
            'Narayanganj',
            'Narsingdi',
            'Netrokona',
            'Rajbari',
            'Shariatpur',
            'Sherpur',
            'Tangail',
            'Bogra',
            'Joypurhat',
            'Naogaon',
            'Natore',
            'Nawabganj',
            'Pabna',
            'Rajshahi',
            'Sirajgonj',
            'Dinajpur',
            'Gaibandha',
            'Kurigram',
            'Lalmonirhat',
            'Nilphamari',
            'Panchagarh',
            'Rangpur',
            'Thakurgaon',
            'Barguna',
            'Barisal',
            'Bhola',
            'Jhalokati',
            'Patuakhali',
            'Pirojpur',
            'Bandarban',
            'Brahmanbaria',
            'Chandpur',
            'Chittagong',
            'Comilla',
            'Coxs Bazar',
            'Feni',
            'Khagrachari',
            'Lakshmipur',
            'Noakhali',
            'Rangamati',
            'Habiganj',
            'Maulvibazar',
            'Sunamganj',
            'Sylhet',
            'Bagerhat',
            'Chuadanga',
            'Jessore',
            'Jhenaidah',
            'Khulna',
            'Kushtia',
            'Magura',
            'Meherpur',
            'Narail',
            'Satkhira',
        ];

        foreach ($disticts as $distict) {
            Distict::create([
                'name' => $distict,
                'division_id' => 1
            ]);
        }
    }
}