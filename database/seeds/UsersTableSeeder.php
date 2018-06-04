<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::create([
       	'name' => 'Freddy Arias',
       	'email' => 'freddyariash@gmail.com',
       	'password' => bcrypt('Yfah#10002366')
       	]);
    }
}
