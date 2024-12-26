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
        Schema::create('subject', function (Blueprint $table) {
            $table->id();
            $table->string('math');
            $table->string('biology');
            $table->string('chemistry');
            $table->string('physics');
            $table->string('english');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subject');
    }
};
