<?php

use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $city = new City();
        $city->name = 'Bogota';
        $city->cod  = 'BGT';
        $city->save();

        $city = new City();
        $city->name = 'Cartagena de Indias';
        $city->cod  = 'CTG';
        $city->save();

        $city = new City();
        $city->name = 'Cúcuta';
        $city->cod  = 'CCT';
        $city->save();

    }
}
