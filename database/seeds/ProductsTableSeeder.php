<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Product;
use App\ProductImage;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//Metodo para minar nuestra base de datos con información para ejemplos
    	factory(Category::class,5)->create();
    	factory(Product::class,120)->create();
    	factory(ProductImage::class,480)->create();

    	/* Metodo para crear 5 categorias, cada una con 5 productos y cada uno de ellos con 5 imagenes
    	$categories = factory(Category::class,5)->create();
    	
        $categories->each(function ($category) {
    			$products = factory(Product::class,20)->make();
    			$category->products()->saveMany($products);

    			$products-> each(function ($p) {
    				$images = factory(ProductImage::class,5)->make();
    				$p->images()->saveMany($images);
    			});
    		});*/
    	
    	/* Metodo para crear 3 usuarios con informacion aleatoria
    		$users = factory(App\User::class,3)
    		->create()
    		->each(function ($u) {
    			$u ->posts() ->save (factory(App\Post::class)->make());
    		}); */

    	/* Metodo manual para crear cada uno de los productos
        Product::create([           
           'name' => 'Royal',
           'description' => ,
           'long_description' => ,
           'price' => ,
           'category_id' => ,
       	]);*/
    }
}
