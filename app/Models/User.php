<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements FilamentUser
{
    use HasFactory, HasRoles, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function canAccessPanel(Panel $panel): bool
    {
        return true;
    }

    /**
     * Get the CycleTimeCOA records associated with the user.
     */
    public function cycleTimeCOAs(): HasMany
    {
        return $this->hasMany(CycleTimeCOA::class);
    }

    public function cargoTcCoa(): HasMany
    {
        return $this->hasMany(CargoTcCoa::class);
    }

    public function cargoTc(): HasMany
    {
        return $this->hasMany(CargoTc::class);
    }

    public function cargoSpotCharter(): HasMany
    {
        return $this->hasMany(CargoSpotCharter::class);
    }
}
