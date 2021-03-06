<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class File extends Model
{
    /**
     * The attributes that are mass assignable
     *
     * @var array
     */
    protected $fillable = [
        'title', 'path'
    ];

    /**
     * Relations picture
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function picture() : HasOne
    {
        return $this->hasOne(Picture::class);
    }

    /**
     * Save file in folder
     *
     * @param $file
     */
    public function saveFile($file)
    {
        $file->move($this->path, $this->title);
    }
}
