<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kegiatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'ruang_id',
        'pengajar_id',
        'event_course_id',
        'nama',
        'tanggal',
        'start',
        'end',
    ];

    /**
     * Relasi ke Ruang
     */
    public function ruang()
    {
        return $this->belongsTo(Ruang::class);
    }

    /**
     * Relasi ke Pengajar
     */
    public function pengajar()
    {
        return $this->belongsTo(Pengajar::class);
    }

    /**
     * Relasi ke EventCourse
     */
    public function eventCourse()
    {
        return $this->belongsTo(EventCourse::class);
    }

    public function moduls()
    {
        return $this->hasMany(modul::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function absensis()
    {
        return $this->hasMany(Absensi::class);
    }

    public function sertifikats()
    {
        return $this->hasMany(Sertifikat::class);
    }

    public function absensipengajars()
    {
        return $this->hasMany(AbsensiPengajar::class);
    }
}
