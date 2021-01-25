<?php

namespace App\Actions\Breed;

use App\Actions\Action;
use App\Services\BreedService;
use App\Services\TheCatApiService;
use Psr\Log\LoggerInterface;

abstract class BreedAction extends Action
{
    protected $breedService;

    public function __construct(LoggerInterface $logger, BreedService $breedService)
    {
        parent::__construct($logger);
        $this->breedService = $breedService;
    }
}
