<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\formation;
use App\Models\role;
use App\Models\chapitre;
use Illuminate\Database\Eloquent\Factories\HasFactory;
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
    protected $guarded = [];

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

    public function roles()
    {
        return $this->belongsToMany(role::class, 'role_users');
    }
    public function Mesformation()
    {
        return $this->belongsToMany(formation::class, 'formateurs', 'user_id', 'formation_id')->withPivot('created_at', 'updated_at');
    }
    public function formation()
    {
        return $this->belongsToMany(formation::class, 'formation_users', 'user_id', 'formation_id')->withPivot('created_at', 'updated_at');
    }
    public function favorie()
    {
        return $this->belongsToMany(formation::class, 'favoris', 'user_id', 'formation_id');
    }
    public function formateur()
    {
        return $this->belongsToMany(formation::class, 'formateurs', 'user_id', 'formation_id');
    }
    public function parcourt()
    {
        return $this->belongsToMany(chapitre::class);

    }
}
