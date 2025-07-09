<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\{
    BelongsTo,
    HasMany
};

class EventCourse extends Model
{
    use HasFactory;

    protected $table = 'event_courses';

    protected $fillable = [
        'nomor_event_course',
        'name',
        'description',
        'start',
        'end',
        'price',
        'employee_id',
    ];

    /**
     * Relasi ke model Employee (pengajar)
     */
    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }

    public function batches(): HasMany
    {
        return $this->hasMany(Batch::class);
    }

    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
    }

    public function gajipengajars(): HasMany
    {
        return $this->hasMany(GajiPengajar::class);
    }

    public function absensipengajars(): HasMany
    {
        return $this->hasMany(AbsensiPengajar::class);
    }

    /**
     * Relasi balik dari PendingRegistration
     */
    public function pendingRegistrations(): HasMany
    {
        return $this->hasMany(PendingRegistration::class);
    }

    /**
     * Opsional: relasi ke murids jika dibutuhkan
     */
    public function murids(): HasMany
    {
        return $this->hasMany(Murid::class);
    }
}
