<?php

declare(strict_types=1);

namespace App\Actions\Authentication;

use Psr\Http\Message\ResponseInterface as Response;
use App\Actions\Authentication\AuthenticationAction;

class AuthenticateAction extends AuthenticationAction
{
    protected function action(): Response
    {
        $response = $this->userService->authenticate($this->request, [
            'password' => $this->resolveParam('password'),
            'username' => $this->resolveParam('username')
        ]);
        return $this->respondWithData($response);
    }
}
