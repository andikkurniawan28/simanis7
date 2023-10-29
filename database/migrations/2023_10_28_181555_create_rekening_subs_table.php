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
            $table->foreignId("rekbi_id")->constrained();
            $table->foreignId("rekening_utama_id")->constrained();
            $table->string("kdprs");
            $table->string("kode")->unique();
            $table->string("name");
            $table->string("balinc");
            $table->string("urutkbi");
            $table->string("klpbi");
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
