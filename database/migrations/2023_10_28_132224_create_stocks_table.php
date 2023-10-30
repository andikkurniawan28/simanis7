<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock', function (Blueprint $table) {
            $table->string("jasa")->nullable();
            $table->string("uang")->nullable();
            $table->string("kode")->unique();
            $table->string("barcode")->nullable()->index();
            $table->string("asli")->nullable();
            $table->string("jenis")->nullable()->index();
            $table->string("pot")->nullable();
            $table->string("golongan")->nullable();
            $table->string("subgol")->nullable();
            $table->string("merk")->nullable()->index();
            $table->string("nama")->nullable()->index();
            $table->string("nama2")->nullable();
            $table->string("nama3")->nullable();
            $table->string("nama4")->nullable();
            $table->float("dos")->nullable();
            $table->string("satuan")->nullable();
            $table->string("satuan2")->nullable();
            $table->string("satuan3")->nullable();
            $table->string("status")->nullable();
            $table->float("min")->nullable();
            $table->float("max")->nullable();
            $table->float("disc")->nullable();
            $table->float("hj", 15, 3)->nullable();
            $table->float("hju", 15, 3)->nullable();
            $table->float("hj2", 15, 3)->nullable();
            $table->float("hj3", 15, 3)->nullable();
            $table->float("mu")->nullable();
            $table->float("hb", 15, 3)->nullable();
            $table->float("hbu", 15, 3)->nullable();
            $table->float("hbu2", 15, 3)->nullable();
            $table->date("oldtgl")->nullable();
            $table->string("namabar")->nullable();
            $table->float("shp")->nullable();
            $table->float("hppmu", 15, 3)->nullable();
            $table->float("hp", 15, 3)->nullable();
            $table->float("isi1")->nullable();
            $table->float("isi2")->nullable();
            $table->string("b1")->nullable();
            $table->string("b2")->nullable();
            $table->string("baru")->nullable();
            $table->string("satuan4")->nullable();
            $table->float("isi3")->nullable();
            $table->float("hj4", 15, 3)->nullable();
            $table->float("mini")->nullable();
            $table->float("poin")->nullable();
            $table->string("uk1")->nullable();
            $table->string("uk2")->nullable();
            $table->string("uk3")->nullable();
            $table->string("uk4")->nullable();
            $table->string("uk5")->nullable();
            $table->string("br1")->nullable();
            $table->string("br2")->nullable();
            $table->string("br3")->nullable();
            $table->string("br4")->nullable();
            $table->string("br5")->nullable();
            $table->string("ppn")->nullable();
            $table->string("warna")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stocks');
    }
}
