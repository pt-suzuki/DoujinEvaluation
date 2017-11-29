<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    protected $fillable = ['code', 'user_id','name','comment','accesscount','field'];
}
