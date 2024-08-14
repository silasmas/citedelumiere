<?php

namespace App\Models;

use App\Models\categorie;
use App\Models\chapitre;
use App\Models\cursuse;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formation extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function cursus()
    {
        return $this->belongsTo(cursuse::class);

    }
    public function chapitres()
    {
        return $this->hasMany(chapitre::class);

    }
    public function etudian()
    {
        return $this->belongsToMany(User::class, 'formation_users');
    }

    public function favoris()
    {
        return $this->hasMany(User::class, 'favoris');
    }
    public function formateur()
    {
        return $this->belongsToMany(User::class, 'formateurs')->withPivot('user_id', 'formation_id', 'created_at', 'updated_at');
    }
    public function user()
    {
        return $this->belongsToMany(User::class, 'formation_users')->withPivot('user_id', 'formation_id', 'created_at', 'updated_at');
    }
    public function categorie()
    {
        return $this->belongsTo(categorie::class);

    }
}
