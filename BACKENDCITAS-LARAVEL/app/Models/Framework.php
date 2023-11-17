<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Framework extends Model
{
    use HasFactory;

    protected $fillable = [
        'usuario_id', 'tipo', 'herramienta',
    ];
    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }

}
