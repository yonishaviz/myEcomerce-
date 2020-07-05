<?php

use Illuminate\Database\Seeder;
use App\product;
use Illuminate\Http\Request;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
$this->call(CategoriesTableSeeder::class);
$this->call(ProductsTableSeeder::class);
$this->call(CouponsTableSeeder::class);

    }
}
