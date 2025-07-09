<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ruang extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomor_ruang',
        'kapasitas',
        'branch_company_id',
    ];

    /**
     * Relasi ke Employee
     */
    public function branchCompany()
    {
        return $this->belongsTo(BranchCompany::class);
    }
    
    public function kegiatans()
    {
        return $this->hasMany(Kegiatan::class);
    }
}
