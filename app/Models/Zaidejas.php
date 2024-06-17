<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zaidejas extends Model
{
    use HasFactory;

    protected $table = 'zaidejai';

    protected $fillable = [
        'Vardas',
        'Pavarde',
        'Gimimo_data',
        'Aukstis',
        'Svoris',
        'Komandos_ID',
    ];

    public function komanda()
    {
        return $this->belongsTo(Komanda::class, 'Komandos_ID');
    }

    public function statistika()
    {
        return $this->hasMany(Statistika::class, 'zaidejo_ID');
    }
}
