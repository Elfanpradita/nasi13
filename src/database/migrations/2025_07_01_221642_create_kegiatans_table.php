<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kegiatans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ruang_id')->constrained('ruangs')->onDelete('cascade');
            $table->foreignId('pengajar_id')->constrained('pengajars')->onDelete('cascade');
            $table->foreignId('event_course_id')->constrained('event_courses')->onDelete('cascade');
            $table->string('nama');
            $table->date('tanggal');
            $table->date('start');
            $table->date('end');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kegiatans');
    }
};
