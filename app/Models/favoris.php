<?php

namespace App\Models;

use App\Models\formation;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class favoris extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function formations()
    {
        return $this->belongsTo(formation::class, 'formation_id');

    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');

    }

}
