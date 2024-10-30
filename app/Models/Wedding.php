<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Wedding extends Model
{
    protected $fillable = [
        'bride',
        'groom_name',
        'bride_name',
        'groom_name_with_title',
        'bride_name_with_title',
        'groom_nickname',
        'bride_nickname',
        'groom_parent',
        'bride_parent',
        'marriage_time',
        'marriage_place',
        'marriage_embed',
        'first_reception_time',
        'first_reception_place',
        'first_reception_embed',
        'second_reception_time',
        'second_reception_place',
        'second_reception_embed',
        'has_second_reception',
    ];

    /**
     * Get all of the main_photo for the Wedding
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function main_photo(): HasMany
    {
        return $this->hasMany(MainPhoto::class, 'id_wedding', 'id');
    }

    /**
     * Get all of the additional_photo for the Wedding
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function additional_photo(): HasMany
    {
        return $this->hasMany(AdditionalPhoto::class, 'id_wedding', 'id');
    }
}
