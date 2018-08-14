<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Replie extends Model
{
    protected $fillable = [

        'comment_id',
        'is_active',
        'email',
        'author',
        'body',

    ];

    public function comment()
    {
      return $this->belongsTo('App\Comment');
    }
}
