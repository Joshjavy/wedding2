<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    use HasFactory;
    protected $table = 'registros';
    protected $fillable = [
        'firstname',
        'RSVPu',
        'RSVPd',
        'RSVPt',
        'RSVPc',
        'Mobile',
        'allergies',
        'transport',
        'song',
    ];

}
