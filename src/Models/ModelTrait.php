<?php

namespace App\Models;

trait ModelTrait
{
    public function findByParam(array $parameters)
    {
        $query = $this->query();

        foreach ($parameters as $key => $value) {
            $query->where($key, $value);
        }
        return $query->first();
    }
}
