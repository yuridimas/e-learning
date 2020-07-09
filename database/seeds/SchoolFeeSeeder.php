<?php

use App\SchoolFee;
use Illuminate\Database\Seeder;

class SchoolFeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(SchoolFee::class, 3)->create();
    }
}
