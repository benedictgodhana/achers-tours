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
        Schema::create('information_categories', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->string('name'); // Name column
            $table->text('description')->nullable(); // Description column (nullable)
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // User ID foreign key referencing users table
            $table->timestamps(); // Created at & updated at timestamps
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('information_categories');
    }
};
