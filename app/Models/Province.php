<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

class Province extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $translatable = ['name'];

    protected $guarded = [];

    public function states():HasMany
    {
        return $this->hasMany(State::class);
    }

    public function suggestions():HasMany
    {
        return $this->hasMany(Suggestion::class);
    }

    public function complaints():HasMany
    {
        return $this->hasMany(Complaint::class);
    }

}
