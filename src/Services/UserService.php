<?php

namespace App\Services;

use App\Models\UserModel;

class UserService
{

    private $userModel;

    public function __construct(UserModel $userModel)
    {
        $this->userModel = $userModel;
    }

    public function findById($id)
    {
        return $this->userModel->find($id);
    }

    public function findByParam(array $parameters)
    {
        return $this->userModel->findByParam($parameters);
    }
}
