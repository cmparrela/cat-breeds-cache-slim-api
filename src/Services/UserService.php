<?php

namespace App\Services;

use Firebase\JWT\JWT;
use Slim\Psr7\Request;
use App\Models\UserModel;
use App\Exceptions\HttpUnauthorizedException;

class UserService
{

    private $userModel;

    public function __construct(UserModel $userModel)
    {
        $this->userModel = $userModel;
    }

    public function findByParam(array $parameters)
    {
        return $this->userModel->findByParam($parameters);
    }

    public function authenticate(Request $request, array $param)
    {
        $user = $this->findByParam($param);
        if (empty($user)) {
            throw new HttpUnauthorizedException("The request requires valid user authentication");
        }

        $jwt = JWT::encode([], $_ENV['JWT_SECRET']);
        return ['token' => $jwt];
    }
}
