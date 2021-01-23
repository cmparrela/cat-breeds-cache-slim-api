<?php

declare(strict_types=1);

use Slim\App;
use Tuupola\Middleware\JwtAuthentication;
use Tuupola\Middleware\HttpBasicAuthentication;

return function (App $app) {
    $app->add(new JwtAuthentication([
        "secret" => $_ENV["JWT_SECRET"],
        "error" => function ($response, $arguments) {
            $data["status"] = "error";
            $data["message"] = $arguments["message"];
            return $response
                ->withHeader("Content-Type", "application/json")
                ->getBody()->write(json_encode($data, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT));
        },
        'ignore' => ['/login']
    ]));
};
