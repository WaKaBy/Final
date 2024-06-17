<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rungtynes extends Model
{
    use HasFactory;

    protected $table = 'rungtynes';

    protected $fillable = [
        'data_ir_laikas',
        'vieta',
        'komandos_ID',
    ];

    public function komanda()
    {
        return $this->belongsTo(Komanda::class, 'komandos_ID');
    }

    public function statistikos()
    {
        return $this->hasMany(Statistika::class, 'rungtyniu_ID');
    }
}
