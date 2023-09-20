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
        Schema::create('entry_records', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('entry_id')->reference('id')->on('entries')->onDelete('restric')->onUpdate('cascade');
            $table->bigInteger('form_field_id');
            $table->text('field_value');
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
        Schema::dropIfExists('entry_records');
    }
};
