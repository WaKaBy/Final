<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistika extends Model
{
    use HasFactory;

    protected $table = 'statistikos';

    protected $fillable = [
        'zaidejas_id',
        'rungtynes_id',
        'Taskai',
        'rezultatyvus_perdavimai',
        'Atkovoti_kamuoliai',
        'Blokavimai'
    ];

    public function zaidejas()
    {
        return $this->belongsTo(Zaidejas::class, 'zaidejas_id');
    }

    public function rungtynes()
    {
        return $this->belongsTo(Rungtynes::class, 'rungtynes_id');
    }
}
