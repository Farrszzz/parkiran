<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRuanganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ruangan', function (Blueprint $table) {
            $table->id();
            // $table->string('no_kendaraan', 8)->nullable();
            $table->string('ruang', 3)->unique();
            $table->tinyInteger('status')->default('0');
            $table->timestamps();
        });

        // Schema::table('ruangan', function (Blueprint $table) {
        //     $table->foreign('no_kendaraan')->references('platNomor')->on('parkir')
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
        Schema::dropIfExists('ruangan');
    }
}
