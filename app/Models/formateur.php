<?php

namespace App\Models;

use App\Models\User;
use App\Models\formation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class formateur extends Model
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
