<?php

namespace App\Models;

use App\Models\formation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chapitre extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function formation()
    {
        return $this->belongsTo(formation::class);

    }
}
