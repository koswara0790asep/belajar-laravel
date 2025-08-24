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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id('teacher_id');
            $table->string('name');
            $table->date('date_of_birth');
            $table->string('address')->nullable();
            $table->string('gender');
            $table->enum('homeroom_teacher', ['Ya', 'Tidak']);
            $table->unsignedBigInteger('class_id');

            // Definisi foreign key
            $table->foreign('class_id')->references('class_id')->on('classes')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
