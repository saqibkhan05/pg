<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pg_rooms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pg_id')->constrained('pgs')->cascadeOnDelete();
            $table->string('room_name');
            $table->string('catogory');
            $table->string('occupancy');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pg_rooms');
    }
};
