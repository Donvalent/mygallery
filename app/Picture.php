<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Picture extends Model
{
    /**
     * The attributes that are mass assignable
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'file_id'
    ];

    /**
     * Relations to File
     *
     * @return HasOne
     */
    public function file()
    {
        return $this->belongsTo(File::class);
    }

    /**
     * Relations to Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
