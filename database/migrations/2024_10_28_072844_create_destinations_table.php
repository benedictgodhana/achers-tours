    <?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateDestinationsTable extends Migration
    {
        public function up()
        {
            Schema::create('destinations', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->text('description');
                $table->string('image')->nullable();

                // Foreign key to users table
                $table->foreignId('user_id')->constrained('users')->onDelete('cascade');

                // Add soft deletes
                $table->softDeletes();

                $table->timestamps();
            });
        }

        public function down()
        {
            Schema::dropIfExists('destinations');
        }
    }
