<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'name', 'body', 'skype', 'sex', 'title', 'password'
    ];
}
