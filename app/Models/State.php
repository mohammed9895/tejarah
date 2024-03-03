<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Translatable\HasTranslations;

class State extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $guarded = [];

    protected $translatable = ['name'];

    public function province(): BelongsTo
    {
        return $this->belongsTo(Province::class);
    }

    public function suggestions()
    {
        return $this->hasMany(Suggestion::class);
    }

    public function complaints()
    {
        return $this->hasMany(Complaint::class);
    }
}
