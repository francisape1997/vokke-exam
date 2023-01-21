<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

# Enums
use App\Enums\GenderEnum;
use App\Enums\FriendlinessEnum;

class Animal extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'nickname',
        'weight',
        'height',
        'gender',
        'friendliness',
        'color',
        'date_of_birth',
        'type',
    ];

    protected $appends = [
        'formatted_gender',
        'formatted_friendliness',
    ];

    // Sortable Fields
    public static $sortables = [
        'name',
        'date_of_birth',
        'weight',
        'height',
    ];

    // Filterable Fields
    public static $filterables = [
        'date_of_birth',
        'weight',
        'height',
        'friendliness',
        'gender'
    ];

    // Searchable Fields
    public static $searchables = [
        'name',
        'nickname',
        'date_of_birth',
        'weight',
        'height',
    ];

    public function getFormattedGenderAttribute()
    {
        return GenderEnum::from($this->gender)->name;
    }

    public function getFormattedFriendlinessAttribute()
    {
        return FriendlinessEnum::from($this->friendliness)->name;
    }
}
