<?php

namespace Hackernews;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
      'title',
      'url',
      'votes'
    ];

    public function user() {
        return $this->belongsTo('Hackernews\User');
    }

    public function comment() {
      return $this->hasMany('Hackernews\Comment');
    }
}
