<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'password',
        'password_without_hash'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getFullnameAttribute(): string
    {
        return ucfirst($this->firstname) . ' ' . ucfirst($this->lastname);
    }

    public function getDisplayNameAttribute(): string
    {
        return ucfirst($this->firstname) . ' ' . ucfirst($this->lastname[0]) . '.';
    }

    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }

    public function get_shorturl_by_role()
    {
        if ($this->is_admin()) {
            return Shorturl::all();
        }
        return $this->shorturls;
    }

    public function shorturls()
    {
        return $this->hasMany(Shorturl::class);
    }

    public function get_notebooks_by_role()
    {
        if ($this->is_admin()) {
            return Notebook::all();
        }
        return $this->notebooks;
    }

    public function notebooks()
    {
        return $this->hasMany(Notebook::class);
    }

    public function is_admin()
    {
        return ($this->role->title === 'admin');
    }

    public function scopeAdmin($query)
    {
        return $query->with(['role' => function($query) {
            $query->where('title', '=', 'admin');
        }])->get();
    }

    public function scopeGuest($query)
    {
        return $query->with(['role' => function($query) {
            $query->where('title', '=', 'guest');
        }])->get();
    }
}
