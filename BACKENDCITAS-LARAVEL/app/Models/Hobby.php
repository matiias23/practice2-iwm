<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hobby extends Model
{
    use HasFactory;
    protected $table = 'hobbys';

    protected $fillable = [
        'usuario_id', 'pasatiempo',
    ];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }

}
