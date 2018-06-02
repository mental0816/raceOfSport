<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Gym;

class GymTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gym::create([
            'gymRegion' => 'Daegu',
            'gymLocation' => 'Dalseoung',
            'gymPrice' => '12343',
            'gymAvailable' => 'Yes'
        ]);

        Gym::create([
            'gymRegion' => 'Seoul',
            'gymLocation' => 'Dongjak',
            'gymPrice' => '1234433',
            'gymAvailable' => 'No'
        ]);
    }
}
