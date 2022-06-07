<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Website extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'url'];

    public function shorturls(): HasMany
    {
        return $this->hasMany(Shorturl::class);
    }

    public function notebooks(): HasMany
    {
        return $this->hasMany(Notebook::class);
    }
}
