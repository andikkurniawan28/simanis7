<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTerminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('termin', function (Blueprint $table) {
            $table->string("kode")->unique();
            $table->string("keterangan")->nullable();
            $table->float("lama");
            $table->float("disc")->nullable();
            $table->float("hdisc")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('termins');
    }
}
