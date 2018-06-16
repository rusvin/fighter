<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    public $timestamps = false;

    protected $table = 'user_roles';

    public function user()
    {
        return $this->hasMany('App\User');
    }

}
