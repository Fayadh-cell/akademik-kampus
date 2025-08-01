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
        Schema::create('course_lecturers', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('course_id');
            $table->string('lecturer_id');
            $table->string('role');
            
            $table->foreign('course_id')->references('course_id')->on('courses');
            $table->foreign('lecturer_id')->references('lecturer_id')->on('lecturers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_lecturers');
    }
};
