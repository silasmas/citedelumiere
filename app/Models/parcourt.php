<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\formation;
use App\Models\User;
use App\Models\chapitre;

class parcourt extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function formation()
    {
        return $this->belongsTo(formation::class);

    }
    public function etudiant()
    {
        return $this->belongsTo(User::class);

    }
    public function chapitre()
    {
        return $this->belongsTo(chapitre::class);

    }
}
