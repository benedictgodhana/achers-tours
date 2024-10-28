<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('name'); // Package name
            $table->text('description'); // Package description
            $table->unsignedBigInteger('tour_id'); // Foreign key to the tours table
            $table->unsignedBigInteger('user_id'); // Foreign key to the users table
            $table->integer('duration'); // Duration in days
            $table->string('image')->nullable(); // Optional package image
            $table->timestamps(); // Created at and updated at timestamps
            $table->softDeletes(); // Soft delete column

            // Foreign key constraints
            $table->foreign('tour_id')->references('id')->on('tours')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('packages');
    }
}
