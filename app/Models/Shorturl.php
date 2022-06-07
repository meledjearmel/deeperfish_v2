<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Shorturl extends Model
{
    use HasFactory;

    protected $fillable = ['key', 'url', 'expire_at'];

    protected $casts = ['expire_at' => 'datetime:d-m-Y'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function website(): BelongsTo
    {
        return $this->belongsTo(Website::class);
    }

    public function is_expired()
    {
        return $this->expire_at <= Carbon::now();
    }

    public function scopeFindByKey($query, $shortkey)
    {
        return $query->where('key', '=', $shortkey)->first();
    }
}
