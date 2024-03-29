<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;


    protected $guarded = [];

    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
