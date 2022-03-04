<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Todos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todos', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->foreignId('user_id');
            $table->string('title');
            $table->text('discription');
            $table->dateTime('due_at')->nullable();
            $table->foreignId('category_id');
            $table->dateTime('completed_at')->nullable();
            $table->timestamps();
           // $table->foreignId('user_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('todos');
    }
}