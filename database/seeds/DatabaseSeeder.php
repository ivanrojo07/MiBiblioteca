<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        


        $users = factory(MiLibreria\User::class)->create();


        $users->each(function(MiLibreria\User $user) use ($users){

        	$tema= factory(MiLibreria\Temas::class)->create();
        	$autores= factory(MiLibreria\Autores::class)->create();
        	$editorial= factory(MiLibreria\Editoriales::class)->create();
        	$libro= factory(MiLibreria\Libros::class,10)->create();




        });
    }
}
