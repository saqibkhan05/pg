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
        Schema::create('beds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pgroom_id')->constrained('pg_rooms')->cascadeOnDelete();
            $table->foreignId('customer_id')->nullable()->constrained('customers')->cascadeOnDelete();
            $table->decimal('cost', 10, 2)->default(0); // Bed Cost
            $table->boolean('status')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beds');
    }
};
