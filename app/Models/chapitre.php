<?php

namespace App\Models;

use App\Models\formation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class chapitre extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function formation()
    {
        return $this->belongsTo(formation::class);

    }
    public function parcourt()
    {
        return $this->belongsToMany(User::class);

    }
}
