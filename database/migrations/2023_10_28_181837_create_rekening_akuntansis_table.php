<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekeningAkuntansisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekening_akuntansis', function (Blueprint $table) {
            $table->id();
            $table->foreignId("rekening_induk_id")->constrained();
            $table->foreignId("rekening_sub_id")->constrained();
            $table->string("kdprs");
            $table->string("kode")->unique();
            $table->string("name");
            $table->string("saldo_normal");
            $table->string("balance_income");
            $table->string("urutan_kelompok_balance_income");
            $table->string("kelompok_balance_income");
            $table->string("urutfbi");
            $table->string("ppn");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rekenings');
    }
}
