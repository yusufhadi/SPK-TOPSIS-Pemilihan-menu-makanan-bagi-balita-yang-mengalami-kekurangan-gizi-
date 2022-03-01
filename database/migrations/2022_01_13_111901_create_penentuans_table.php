<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenentuansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penentuans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('umur');
            $table->string('bobot_umur');
            $table->string('tinggiBadan');
            // $table->string('bobot_tinggiBadan');
            $table->string('beratBadan');
            // $table->string('bobot_beratBadan');
            $table->string('alergi');
            // $table->string('bobot_alergi');
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
        Schema::dropIfExists('penentuans');
    }
}
