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
         Schema::create('medical-record', function (Blueprint $table) {
            $table->id();
            $table->string('symptoms', 100);
            $table->string('treatement', 100);
            $table->string('comment', 200);
            $table->string('date', 30);
            $table->timestamps();
            $table->softDeletes();
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('medical-record');
    }
};
