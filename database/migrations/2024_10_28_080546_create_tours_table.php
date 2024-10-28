<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToursTable extends Migration
{
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('name'); // Tour name
            $table->text('description'); // Tour description
            $table->unsignedBigInteger('destination_id'); // Foreign key to the destinations table
            $table->unsignedBigInteger('user_id'); // Foreign key to the users table
            $table->date('start_date'); // Tour start date
            $table->date('end_date'); // Tour end date
            $table->string('image')->nullable(); // Optional tour image
            $table->timestamps(); // Created at and updated at timestamps
            $table->softDeletes(); // Soft delete timestamp

            // Foreign key constraints
            $table->foreign('destination_id')->references('id')->on('destinations')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tours');
    }
}
