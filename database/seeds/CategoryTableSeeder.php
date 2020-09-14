<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Array of categories
     *
     * @var string[]
     */
    public $categories = [
        'New',
        'Popular',
        'Memes'
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try
        {
            foreach ($this->categories as $category)
                DB::table('categories')->insert([
                    'title' => $category
                ]);
        }
        catch (Exception $exception)
        {

        }

    }
}
