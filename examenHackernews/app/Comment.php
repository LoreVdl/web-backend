<?php

namespace Hackernews;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $primarykey = 'comments_id';
    protected $fillable = [
      'body',
    ];

    public function user() {
        return $this->belongsTo('Hackernews\User');
    }

    public function article() {
      return $this->belongsTo('Hackernews\Article');
    }
}
