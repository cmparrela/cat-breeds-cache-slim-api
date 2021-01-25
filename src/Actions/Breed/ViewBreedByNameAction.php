<?php

namespace App\Actions\Breed;

use Psr\Http\Message\ResponseInterface as Response;

class ViewBreedByNameAction extends BreedAction
{
    protected function action(): Response
    {
        $breedName = $this->resolveParam('name');
        $response = $this->breedService->findByName($breedName);
        return $this->respondWithData($response);
    }
}
