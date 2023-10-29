<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekbisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekbis', function (Blueprint $table) {
            $table->id();
            $table->string("kode")->unique();
            $table->string("nama")->unique();
            $table->string("debit_kredit");
            $table->string("kelas");
            $table->string("balance_income");
            $table->string("urutfbi");
            $table->string("urutkbi");
            $table->string("klpbi");
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
