<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TodoAttachments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todo_attachments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('todo_id');
            $table->string('filename');
            $table->string('path');
            $table->integer('filesize');
            $table->string('mime_type');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('todo_attachments');
    }
}
