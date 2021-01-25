<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class BreedModel extends Eloquent
{
    use ModelTrait;

    protected $table = 'breed';
    protected $fillable = [
        'name',
        'temperament',
        'life_span',
        'alt_names',
        'wikipedia_url',
        'origin',
        'weight_imperial',
        'experimental',
        'hairless',
        'natural',
        'rare',
        'rex',
        'suppress_tail',
        'short_legs',
        'hypoallergenic',
        'adaptability',
        'affection_level',
        'country_code',
        'child_friendly',
        'dog_friendly',
        'energy_level',
        'grooming',
        'health_issues',
        'intelligence',
        'shedding_level',
        'social_needs',
        'stranger_friendly',
        'vocalisation'
    ];

    public function findByName($name)
    {
        $query = $this->query();
        $query->where('name', 'like', "%$name%");
        return $query->first();
    }
}
