<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekeningInduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekening_induks', function (Blueprint $table) {
            $table->id();
            $table->string("kdprs");
            $table->string("kode")->unique();
            $table->string("nama");
            $table->string("urutfbi");
            $table->string("kelompok_balance_income");
            $table->string("debit_kredit");
            $table->string("balance_income");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rekmains');
    }
}
