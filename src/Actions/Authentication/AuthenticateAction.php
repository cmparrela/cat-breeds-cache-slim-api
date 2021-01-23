<?php

declare(strict_types=1);

namespace App\Actions\Authentication;

use Firebase\JWT\JWT;
use Slim\Exception\HttpUnauthorizedException;
use Psr\Http\Message\ResponseInterface as Response;
use App\Actions\Authentication\AuthenticationAction;

class AuthenticateAction extends AuthenticationAction
{
    /**
     * {@inheritdoc}
     */
    protected function action(): Response
    {
        $user = $this->userService->findByParam([
            'password' => $this->resolveParam('password'),
            'username' => $this->resolveParam('username')
        ]);

        if (empty($user)) {
            throw new HttpUnauthorizedException($this->request, 'The request requires valid user authentication');
        }
        $jwt = JWT::encode([], $_ENV['JWT_SECRET']);
        return $this->respondWithData(['token' => $jwt]);
    }
}
