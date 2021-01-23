<?php

declare(strict_types=1);

use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;
use Psr\Container\ContainerInterface;
use App\Core\Settings\SettingsInterface;
use Illuminate\Database\Capsule\Manager as Capsule;

return function (ContainerInterface $container) {
    $settings = $container->get(SettingsInterface::class);

    $capsule = new Capsule();
    $capsule->addConnection($settings->get('db'));
    $capsule->setEventDispatcher(new Dispatcher(new Container));
    $capsule->setAsGlobal();
    $capsule->bootEloquent();
    return $capsule;
};
