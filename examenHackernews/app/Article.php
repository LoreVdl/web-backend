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
}
