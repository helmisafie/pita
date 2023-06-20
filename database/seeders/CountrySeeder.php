<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Constraint\Count;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $myStates = [
            "JHR" => 'Johor',
            "KDH" => 'Kedah',
            "KTN" => 'Kelantan',
            "MLK" => 'Melaka',
            "NSN" => 'Negeri Sembilan',
            "PHG" => 'Pahang',
            "PNG" => 'Penang',
            "PRK" => 'Perak',
            "PLS" => 'Perlis',
            "SBH" => 'Sabah',
            "SWK" => 'Sarawak',
            "SGR" => 'Selangor',
            "TRG" => 'Terengganu',
            "KUL" => 'Kuala Lumpur',
            "LBN" => 'Labuan',
            "PJY" => 'Putrajaya',
        ];
        $countries = [
            ['code' => 'my', 'name' => 'Malaysia', 'states' => json_encode($myStates)],
        ];
        Country::insert($countries);
    }
}
