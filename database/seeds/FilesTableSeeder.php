<?php

use Illuminate\Database\Seeder;

class FilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $files = scandir(public_path() . '\images');
        foreach ($files as $file)
        {
            try {
                if(exif_imagetype(public_path() . '\images\\' . $file)){
                    DB::table('files')->insert([
                        'title' => $file,
                        'path' => public_path() . '\images'
                    ]);
                }
            }
            catch (Exception $exception){

            }
        }
    }
}
