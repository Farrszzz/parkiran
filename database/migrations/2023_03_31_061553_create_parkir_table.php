<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParkirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parkir', function (Blueprint $table) {
            $table->id();
            $table->string('platNomor', 8)->unique();
            $table->string('ruangParkir', 3)->nullable();
            $table->tinyInteger('sudah_masuk')->default('0');
            $table->Double('tarif')->default('0.0');
            $table->timestamps();
        });

        // Schema::table('parkir', function (Blueprint $table) {
        //     $table->foreign('ruangParkir')->references('ruang')->on('ruangan')
        //         ->onDelete('cascade')->onUpdate('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parkir');
    }
}
