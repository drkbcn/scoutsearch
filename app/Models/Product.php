<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use JeroenG\Explorer\Application\Explored;

class Product extends Model implements Explored
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'name',
        'slug',
        'short_description',
        'description',
        'posology',
        'indications',
        'contraindications',
        'precautions',
        'side_effects',
        'weight',
        'width',
        'height',
        'depth',
        'active',
    ];

    public function mappableAs(): array
    {
        return [
            'id' => 'keyword',
            'name' => 'text',
            'short_description' => 'text',
            'description' => 'text',
            'active' => 'boolean'
        ];
    }
}
