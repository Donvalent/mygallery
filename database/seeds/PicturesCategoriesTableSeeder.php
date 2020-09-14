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
        $categoriesId = array();

        foreach (DB::table('categories')->pluck('id') as $category)
            array_push($categoriesId, $category);

        foreach ($picturesId as $pictureId)
        {
            $categoryRandomId = array_rand($categoriesId, 1);

            for ($i = $categoriesId[array_key_first($categoriesId)]; $i <= $categoriesId[$categoryRandomId]; $i++)
            {
                DB::table('pictures_categories')->insert([
                    'picture_id' => $pictureId,
                    'category_id' => $i
                ]);
            }
        }
    }
}
