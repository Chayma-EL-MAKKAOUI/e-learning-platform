<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\cour;

class element extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'titre_elt',

    ];
    public function cours()
    {
        return $this->hasMany(cour::class);
    }
}
