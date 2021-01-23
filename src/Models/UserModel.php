<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class UserModel extends Eloquent
{
    protected $table = 'user';
    protected $fillable = ['name', 'username', 'password', 'updated_at', 'created_at'];

    public function findByParam(array $parameters)
    {
        $query = $this->query();

        foreach ($parameters as $key => $value) {
            $query->where($key, $value);
        }
        return $query->first();
    }
}
