<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The attributes that are mass assignable
     *
     * @var array
     */
    protected $fillable = [
        'title'
    ];

    /**
     * Relations to Picture
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function pictures()
    {
        return $this->belongsToMany(Picture::class);
    }
}
