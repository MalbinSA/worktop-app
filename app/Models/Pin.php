<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pin extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function flag(): BelongsTo
    {
        return $this->belongsTo(Flag::class);
    }
}
