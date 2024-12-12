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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->string('name'); // Name column
            $table->string('email')->nullable(); // Email column (nullable)
            $table->text('message'); // Message column
            $table->string('image')->nullable(); // Image column (nullable)
            $table->boolean('is_approved')->default(false); // Is approved column
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // User ID foreign key referencing users table
            $table->timestamps(); // Created at & updated at timestamps
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
