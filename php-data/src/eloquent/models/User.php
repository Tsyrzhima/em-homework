<?php

namespace data\eloquent\models;


use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $fillable = ['name', 'email', 'password'];
    public $timestamps = false;

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}