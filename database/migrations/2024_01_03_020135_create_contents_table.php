<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id');
            $table->string('module')->nullable();
            $table->string('type');
            $table->string('title');
            $table->text('content')->nullable();
            $table->string('image')->nullable();
            $table->date('start_on')->nullable();
            $table->date('finish_on')->nullable();
            $table->boolean('frontpage')->nullable();
            $table->foreignId('user_id');
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
        Schema::dropIfExists('contents');
    }
};
