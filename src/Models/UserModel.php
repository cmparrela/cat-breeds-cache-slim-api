<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class UserModel extends Eloquent
{
    use ModelTrait;
    
    protected $table = 'user';
    protected $fillable = ['name', 'username', 'password', 'updated_at', 'created_at'];
}
