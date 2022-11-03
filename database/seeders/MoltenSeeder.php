<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Level;

class MoltenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('levels')->insert([

        $molten = [
            // [
            //     'mc' => 54,
            //     'material' => 'HD-2',
            //     'capacity' => 1343,
            //     'min' => 1000,
            //     'max' => 2000
            // ],
            // [
            //     'mc' => 55,
            //     'material' => 'HD-2',
            //     'capacity' => 1343,
            //     'min' => 1000,
            //     'max' => 2000
            // ],
            // [
            //     'mc' => 56,
            //     'material' => 'HD-2',
            //     'capacity' => 1343,
            //     'min' => 1000,
            //     'max' => 2000
            // ],
            // [
            //     'mc' => 57,
            //     'material' => 'HD-2',
            //     'capacity' => 1343,
            //     'min' => 1000,
            //     'max' => 2000
            // ],
            // [
            //     'mc' => 58,
            //     'material' => 'HD-2',
            //     'capacity' => 1343,
            //     'min' => 1000,
            //     'max' => 2000
            // ],
            // [
            //     'mc' => 59,
            //     'material' => 'HD-2',
            //     'capacity' => 1343,
            //     'min' => 1000,
            //     'max' => 2000
            // ],
            // [
            //     'mc' => 60,
            //     'material' => 'HD-2',
            //     'capacity' => 1343,
            //     'min' => 1000,
            //     'max' => 2000
            // ],
            // [
            //     'mc' => 61,
            //     'material' => 'HD-2',
            //     'capacity' => 1343,
            //     'min' => 1000,
            //     'max' => 2000
            // ],
            // [
            //     'mc' => 62,
            //     'material' => 'HD-2',
            //     'capacity' => 1343,
            //     'min' => 1000,
            //     'max' => 2000
            // ],
            // [
            //     'mc' => 63,
            //     'material' => 'HD-2',
            //     'capacity' => 1343,
            //     'min' => 1000,
            //     'max' => 2000
            // ],
            // [
            //     'mc' => 64,
            //     'material' => 'HD-2',
            //     'capacity' => 1343,
            //     'min' => 1000,
            //     'max' => 2000
            // ],
            // [
            //     'mc' => 65,
            //     'material' => 'HD-2',
            //     'capacity' => 1343,
            //     'min' => 1000,
            //     'max' => 2000
            // ],
            // [
            //     'mc' => 66,
            //     'material' => 'HD-2',
            //     'capacity' => 1343,
            //     'min' => 1000,
            //     'max' => 2000
            // ],
            // [
            //     'mc' => 67,
            //     'material' => 'HD-2',
            //     'capacity' => 1343,
            //     'min' => 1000,
            //     'max' => 2000
            // ],
            [
                'mc' => 68,
                'material' => 'HD-2',
                'capacity' => 1343,
                'min' => 1000,
                'max' => 2000
            ],
        ];

        level::insert($molten);
    }
}
