<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\element;


class cour extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'file_path',
        'element_id'
    ];
    public function element()
    {
        return $this->belongsTo(element::class);
    }
}
