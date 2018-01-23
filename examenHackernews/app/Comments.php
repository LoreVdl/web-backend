<?php

namespace Hackernews;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $fillable = [
      'body',
    ];

    public function users() {
        return $this->belongsTo('Hackernews\User', 'user_id');
    }
}
