<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    protected $fillable = [
        'no',
        'nama_site',
        'core',
        'status_penggunaan',
        'status_core',
        'otdr_m',
        'source_site',
        'destination_site',
        'keterangan'
    ];
}
