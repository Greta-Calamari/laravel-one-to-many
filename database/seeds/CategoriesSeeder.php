<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoriesList=['Primi piatti','Secondi Piatti','Contorni','Antipasti','Dolci'];
        forEach($categoriesList as $category){
            $newCategory = new Category();
            $newCategory ->name = $category;
            $newCategory ->slug = Str::of($newCategory ->name)->slug('-');
            // per ognuna di queste crea categoria


            $newCategory ->save();

        }
    }
}
