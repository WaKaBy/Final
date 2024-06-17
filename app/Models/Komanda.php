<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komanda extends Model
{
    use HasFactory;

    protected $table = 'komandos';

    protected $fillable = [
        'Pavadinimas',
        'Miestas',
        'Ikurmio_metai',
    ];

    public function zaidejai()
    {
        return $this->hasMany(Zaidejas::class, 'Komandos_ID');
    }

    public function rungtynes()
    {
        return $this->hasMany(Rungtynes::class, 'komandos_ID');
    }

}
