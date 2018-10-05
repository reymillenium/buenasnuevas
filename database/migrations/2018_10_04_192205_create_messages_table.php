<?php
    
    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;
    
    class CreateMessagesTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('messages', function (Blueprint $table) {
                $table->increments('id', 11);
                $table->integer('user_id')->unsigned();
                $table->foreign('user_id')->references('id')->on('users');
                
                $table->string('subject', 255);
                $table->text('body');
                
                // Método helper conveniente con el cual se van a declarar 2 columnas (created_at & updated_at) que pueden ser nulas
                $table->timestamps();
                // $table->timestamp('created_at');
                // $table->timestamp('updated_at')->nullable();
            });
        }
        
        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::dropIfExists('messages');
        }
    }
