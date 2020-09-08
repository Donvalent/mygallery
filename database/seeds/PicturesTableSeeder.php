<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PicturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $files = DB::table('files')->get();

        foreach ($files as $file)
        {
            DB::table('pictures')->insert([
                'title' => Str::random(10),
                'description' => Str::random(10),
                'category' => 'New',
                'file_id' => $file->id
            ]);
        }
    }
}
