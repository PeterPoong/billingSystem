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
        Schema::create('user_detail', function (Blueprint $table) {
            $table->bigIncrements('user_detail_id');
            $table->unsignedBigInteger('user_id');
            $table->integer('user_ic');
            $table->string('user_lastName');
            $table->string('user_firstName');
            $table->integer('user_contactNo');
            $table->string('user_address');
            $table->string('user_detail_status');
            $table->timestamps();

            $table->index('user_id');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_detail_models');
    }
};
