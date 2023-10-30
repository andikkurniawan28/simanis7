<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekeningSubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekening_subs', function (Blueprint $table) {
            $table->id();
            $table->foreignId("rekening_balance_income_id")->constrained();
            $table->foreignId("rekening_induk_id")->constrained();
            $table->string("kdprs");
            $table->string("kode")->unique();
            $table->string("nama");
            $table->string("balance_income");
            $table->string("urutan_kelompok_balance_income");
            $table->string("kelompok_balance_income");
            $table->string("urutfbi");
            $table->string("saldo");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reksubs');
    }
}
