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
        Schema::create('competition_applications', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('member_id')->nullable();
            $table->string('given_name')->nullable();
            $table->string('family_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('display_name')->nullable();
            $table->char('gender',1);
            $table->date('dob');
            $table->string('email')->nullable();
            $table->string('mobile')->nullable();
            $table->bigInteger('competition_id');
            $table->string('category')->nullable();
            $table->string('weight')->nullable();
            $table->string('role');
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
        Schema::dropIfExists('competition_applications');
    }
};