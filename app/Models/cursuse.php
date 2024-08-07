<?php

namespace App\Models;

use App\Models\formation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cursuse extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function formations()
    {
        return $this->hasMany(formation::class);

    }
}
