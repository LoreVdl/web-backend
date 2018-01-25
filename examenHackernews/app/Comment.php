<?php

namespace Hackernews;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    
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
