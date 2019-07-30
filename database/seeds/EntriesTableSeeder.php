<?php

use Illuminate\Database\Seeder;

class EntriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('entries')->insert([
            'base' => 'EUR',
            'target' => 'USD',
            'rate' => '.1337',
            'date' => '2019-07-30',
        ]);

        DB::table('entries')->insert([
            'base' => 'PLN',
            'target' => 'USD',
            'rate' => '.123',
            'date' => '2019-07-30',
        ]);

        DB::table('entries')->insert([
            'base' => 'EUR',
            'target' => 'USD',
            'rate' => '.443',
            'date' => '2019-07-30',
        ]);
    }
}
