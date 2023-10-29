<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesmenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salesmen', function (Blueprint $table) {
            $table->id();
            $table->string("kode")->unique();
            $table->string("nama");
            $table->string("alamat")->nullable();
            $table->string("telepon")->nullable();
            $table->string("kota")->nullable();
            $table->string("keterangan")->nullable();
            $table->string("khusus")->nullable();
            $table->string("ktp")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salesmen');
    }
}
