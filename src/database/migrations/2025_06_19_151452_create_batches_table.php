<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('batches', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_course_id')->constrained('event_courses')->onDelete('cascade');
            $table->string('name');
            $table->string('kapasitas');
            $table->boolean('isFull')->default(false);
            $table->foreignId('pengajar_id')->constrained('pengajars')->onDelete('cascade');
            $table->date('start_registration');
            $table->date('end_registration');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('batches');
    }
};
