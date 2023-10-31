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
        Schema::create('reksub', function (Blueprint $table) {
            $table->string("kdprs")->nullable();
            $table->string("mainkode")->nullable();
            $table->string("kode")->unique()->index();
            $table->string("nama")->unique()->index();
            $table->string("balinc")->nullable();
            $table->string("urutkbi")->nullable();
            $table->string("klpbi")->nullable();
            $table->string("urutfbi")->nullable();
            $table->string("rekbi")->nullable();
            $table->string("saldo")->nullable();
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
