<?php

use Illuminate\Database\Seeder;

class PicturesCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $picturesId = DB::table('pictures')->pluck('id');
        $categoriesId = DB::table('categories')->pluck('id');

        foreach($picturesId as $id)
        {

        }
    }
}
