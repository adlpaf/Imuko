<?php

use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $client = new Client();
        $client->name    = 'Cliente 1';
        $client->cod     = 'CT1';
        $client->city_id = 1;
        $client->save();

        $client = new Client();
        $client->name    = 'Cliente 2';
        $client->cod     = 'CT2';
        $client->city_id = 2;
        $client->save();

        $client = new Client();
        $client->name    = 'Cliente 3';
        $client->cod     = 'CT3';
        $client->city_id = 3;
        $client->save();

        $client = new Client();
        $client->name    = 'Cliente 4';
        $client->cod     = 'CT4';
        $client->city_id = 1;
        $client->save();

        $client = new Client();
        $client->name    = 'Cliente 5';
        $client->cod     = 'CT5';
        $client->city_id = 2;
        $client->save();

        $client = new Client();
        $client->name    = 'Cliente 6';
        $client->cod     = 'CT6';
        $client->city_id = 3;
        $client->save();

    }
}
