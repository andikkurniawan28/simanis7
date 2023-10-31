<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->string("kode")->unique();
            $table->string("nama")->nullable();
            $table->string("alamat")->nullable();
            $table->string("alamat2")->nullable();
            $table->string("telp")->nullable();
            $table->string("fax")->nullable();
            $table->string("kota")->nullable();
            $table->string("nmkota")->nullable();
            $table->string("kodepos")->nullable();
            $table->string("golongan")->nullable();
            $table->string("keterangan")->nullable();
            $table->float("disc1")->nullable();
            $table->float("disc2")->nullable();
            $table->float("plafon")->nullable();
            $table->string("khusus")->nullable();
            $table->string("ekspedisi")->nullable();
            $table->string("status")->nullable();
            $table->string("termin")->nullable();
            $table->float("kurs")->nullable();
            $table->string("person")->nullable();
            $table->string("hp")->nullable();
            $table->string("ptelp")->nullable();
            $table->string("pfax")->nullable();
            $table->string("email")->nullable();
            $table->string("sk")->nullable();
            $table->string("tipe")->nullable();
            $table->string("noac")->nullable();
            $table->string("npwp")->nullable();
            $table->string("namawp")->nullable();
            $table->string("alamatwp")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
