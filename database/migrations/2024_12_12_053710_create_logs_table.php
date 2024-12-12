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
        Schema::create('logs', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->string('action'); // Action column
            $table->text('details')->nullable(); // Details column (nullable)
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null'); // User ID with foreign key relationship
            $table->timestamps(); // Created at & updated at timestamps
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logs');
    }
};
