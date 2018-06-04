<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Product::create([
       	'name' => 'Freddy Arias',
       	'email' => 'freddyariash@gmail.com',
       	'password' => bcrypt('Yfah#10002366')
       	]);
    }
}
