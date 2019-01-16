<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent;
class Post extends Model
{
    protected $primaryKey = 'post_id';
    protected $fillable = [
        'description', 'attachment_type', 'attachment','price'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
