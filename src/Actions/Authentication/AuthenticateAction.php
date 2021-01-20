<?php

declare(strict_types=1);

namespace App\Actions\Authentication;

use Firebase\JWT\JWT;
use App\Actions\Action;
use Psr\Http\Message\ResponseInterface as Response;

class AuthenticateAction extends Action
{
    /**
     * {@inheritdoc}
     */
    protected function action(): Response
    {
        $jwt = JWT::encode([], $_ENV['JWT_SECRET']);

        return $this->respondWithData(['token' => $jwt]);
    }
}
