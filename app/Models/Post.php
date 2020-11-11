<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    protected $table = "posts";

    protected $fillable = [
        'id', 'title', 'slug', 'extract', 'body'
    ];

    protected $casts = [
        'created_at' => 'date:Y-m-d',
        'updated_at' =>  'date:Y-m-d',
    ];


    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
