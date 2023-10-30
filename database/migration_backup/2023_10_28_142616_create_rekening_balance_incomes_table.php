<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekeningBalanceIncomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekening_balance_incomes', function (Blueprint $table) {
            $table->id();
            $table->string("kode")->unique();
            $table->string("nama")->unique();
            $table->string("debit_kredit");
            $table->string("kelas");
            $table->string("balance_income");
            $table->string("urutfbi");
            $table->string("urutan_kelompok_balance_income");
            $table->string("kelompok_balance_income");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rekbis');
    }
}
