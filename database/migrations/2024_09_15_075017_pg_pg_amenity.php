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
        Schema::create('pg_pg_amenity', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pgs_id')->constrained('pgs')->cascadeOnDelete();
            $table->foreignId('pg_amenities_id')->constrained('pg_amenities')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pg_pg_amenity');
    }
};
