<?php

namespace App\Services;

use App\Models\BreedModel;
use App\Services\TheCatApiService;

class BreedService
{
    private $breedModel;
    private $theCatApiService;

    public function __construct(BreedModel $breedModel, TheCatApiService $theCatApiService)
    {
        $this->breedModel = $breedModel;
        $this->theCatApiService = $theCatApiService;
    }

    public function findByName(string $name)
    {
        $breeds = $this->breedModel->findByName($name);

        if (empty($breeds)) { 
            $apiBreeds = $this->theCatApiService->searchBreedsByName($name);
            return $this->cacheBreeds($apiBreeds);
        }
        return $breeds; 
    }

    public function insertNewBreed(array $data)
    {
        return $this->breedModel->insert($data);
    }

    public function cacheBreeds($apiBreeds)
    {
        $data = [];
        foreach ($apiBreeds as $breed) {
            $data[] = [
                'id' => $breed->id ?? null,
                'name' => $breed->name ?? null,
                'temperament' => $breed->temperament ?? null,
                'life_span' => $breed->life_span ?? null,
                'alt_names' => $breed->alt_names ?? null,
                'wikipedia_url' => $breed->wikipedia_url ?? null,
                'origin' => $breed->origin ?? null,
                'weight_imperial' => $breed->weight->imperial ?? null,
                'experimental' => $breed->experimental ?? null,
                'hairless' => $breed->hairless ?? null,
                'natural' => $breed->natural ?? null,
                'rare' => $breed->rare ?? null,
                'rex' => $breed->rex ?? null,
                'suppressed_tail' => $breed->suppressed_tail ?? null,
                'short_legs' => $breed->short_legs ?? null,
                'hypoallergenic' => $breed->hypoallergenic ?? null,
                'adaptability' => $breed->adaptability ?? null,
                'affection_level' => $breed->affection_level ?? null,
                'country_code' => $breed->country_code ?? null,
                'child_friendly' => $breed->child_friendly ?? null,
                'dog_friendly' => $breed->dog_friendly ?? null,
                'energy_level' => $breed->energy_level ?? null,
                'grooming' => $breed->grooming ?? null,
                'health_issues' => $breed->health_issues ?? null,
                'intelligence' => $breed->intelligence ?? null,
                'shedding_level' => $breed->shedding_level ?? null,
                'social_needs' => $breed->social_needs ?? null,
                'stranger_friendly' => $breed->stranger_friendly ?? null,
                'vocalisation' => $breed->vocalisation ?? null
            ];
        }

        $this->insertNewBreed($data);

        return $data;
    }
}
