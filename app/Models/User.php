<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;

class User extends Authenticatable implements FilamentUser
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'number',
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
        'password' => 'hashed',
    ];
    public function stateadmins(){
        return $this->hasOne(StateAdmin::class);
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    public function students(){
        return $this->hasMany(Student::class);
    }
    public function unitadmins(){
        return $this->hasMany(UnitAdmin::class);
    }
    public function canAccessPanel(Panel $panel): bool
    {
        // return str_ends_with($this->email, '@yourdomain.com') && $this->hasVerifiedEmail();
        $allowedRoles = ['State', 'Unit', 'MarkazAdmin', 'SuperAdmin'];
        return in_array($this->role, $allowedRoles);

    }

    public function isSuperAdmin():bool{
        return auth()->user()->role === 'SuperAdmin';
    }
    public function isMarkazAdmin():bool{
        return auth()->user()->role === 'MarkazAdmin';
    }
    public function isStudent():bool{
        return auth()->user()->role === 'Student';
    }
    public function isStateAdmin():bool{
        return auth()->user()->role === 'State';
    }
    public function isUnitAdmin():bool{
        return auth()->user()->role === 'Unit';
    }
}
