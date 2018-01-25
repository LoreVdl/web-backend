<?php

namespace Hackernews;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

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
