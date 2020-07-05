<?php

use Carbon\Carbon;
use App\Category;
use Illuminate\Database\Seeder;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();
        Category::insert([
['name' => 'Labtops', 'slug' => 'Labtops', 'created_at' => $now, 'updated_at'=> $now],
['name' => 'Desktops', 'slug' => 'Desktops', 'created_at' => $now, 'updated_at'=> $now],
['name' => 'Mobile Phones', 'slug' => 'Phones', 'created_at' => $now, 'updated_at'=> $now],
['name' => 'Cameras', 'slug' => 'Cameras', 'created_at' => $now, 'updated_at'=> $now],
['name' => 'Printers', 'slug' => 'Printers', 'created_at' => $now, 'updated_at'=> $now],
['name' => 'tablets', 'slug' => 'tablets', 'created_at' => $now, 'updated_at'=> $now],


        ]);
    }
}
