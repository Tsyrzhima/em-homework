<?php

namespace data\eloquent\models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    public $timestamps = false;
    protected $fillable = ['title', 'body', 'user_id'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}