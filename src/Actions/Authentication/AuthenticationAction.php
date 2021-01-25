<?php

declare(strict_types=1);

namespace App\Actions\Authentication;

use App\Actions\Action;
use Psr\Log\LoggerInterface;
use App\Services\UserService;

abstract class AuthenticationAction extends Action
{
    protected $userService;

    public function __construct(LoggerInterface $logger, UserService $userService)
    {
        parent::__construct($logger);
        $this->userService = $userService;
    }
}
