<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MainPhoto extends Model
{
    protected $fillable = [
        
        'id_wedding',
        'groom_photo',
        'bride_photo',
    ];

    /**
     * Get the wedding that owns the MainPhoto
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function wedding(): BelongsTo
    {
        return $this->belongsTo(Wedding::class, 'id_wedding', 'id');
    }
}
