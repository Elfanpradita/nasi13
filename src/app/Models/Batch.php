<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Batch extends Model
{
    use HasFactory;

    protected $table = 'batches';

    protected $fillable = [
        'event_course_id',
        'name',
        'kapasitas',
        'is_full',
        'start_registration',
        'end_registration',
    ];

    protected $casts = [
        'is_full' => 'boolean',
    ];

    public function eventCourse()
    {
        return $this->belongsTo(EventCourse::class);
    }
}
