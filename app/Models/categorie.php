<?php

namespace App\Models;

use App\Models\formation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorie extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function formation()
    {
        return $this->hasMany(formation::class);

    }
}
