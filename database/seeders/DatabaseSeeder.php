<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Order;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DatabaseSeeder extends Seeder
{
    use RefreshDatabase;
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         Customer::factory(3)->create();
         Order::factory(10)->create();
    }
}
