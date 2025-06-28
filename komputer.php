<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class komputer extends Model
{
    protected $table = 'komputers';

    protected $fillable = [
        'kodekomputer',
        'merek',
        'harga',
        'foto',
    ];
}
