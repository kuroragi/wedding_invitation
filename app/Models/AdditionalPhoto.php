<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AdditionalPhoto extends Model
{
    protected $fillable = [
        'id_wedding',
        'photo',
    ];

    /**
     * Get the wedding that owns the AdditionalPhoto
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function wedding(): BelongsTo
    {
        return $this->belongsTo(Wedding::class, 'id_wedding', 'id');
    }
}
