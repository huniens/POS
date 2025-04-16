<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LevelModel extends Model
{
    use HasFactory;

    protected $table = 'm_level'; // pastikan ini sesuai dengan nama tabel kamu

    protected $fillable = [
        'level_kode',
        'level_nama'
    ];
}
