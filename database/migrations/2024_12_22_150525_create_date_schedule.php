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
        Schema::create('date_schedule', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('tutor');
            $table->string('email');
            $table->string('subject');
            $table->date('date');
            $table->enum('time', ['5pm', '7pm', '9pm']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('date_schedule');
    }
};
