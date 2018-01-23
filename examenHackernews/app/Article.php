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

    public function users() {
        return $this->belongsTo('Hackernews\User', 'user_id');
    }

    public function comments() {
      return $this->hasMany('Hackernews\Comments'); 
    }
}
