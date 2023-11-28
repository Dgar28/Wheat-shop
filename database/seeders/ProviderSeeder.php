<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Provider;

class ProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Provider::factory()->count(10)->create();

       /* $data = [
            [
            'name_p' => 'Panes el molino',
            'email' => 'panm@outlook.com',
            'phone' => '5526880'
            ],

            [
                'name_p' => 'Good breads',
                'email' => 'gbd@gmail.com',
                'phone' => '5671338'
                ],

            [
            'name_p' => 'Color donuts',
            'email' => 'coldon@outlook.com',
            'phone' => '3360441'
             ],
        ];

        DB::table('providers')->insert($data);
        */
    }
}
