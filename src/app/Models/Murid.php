<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Murid extends Model
{
    use HasFactory;

    protected $table = 'murids';

    protected $fillable = [
        'user_id',
        'nama_lengkap',
        'no_telepon',
        'umur',
        'tempat_tanggal_lahir',
        'alamat',
        'jenjang_pendidikan',
    ];

    /**
     * Relasi ke model User
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function absensis()
    {
        return $this->hasMany(Absensi::class);
    }
}
