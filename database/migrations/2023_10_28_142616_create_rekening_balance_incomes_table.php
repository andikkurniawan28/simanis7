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
        Schema::create('rekbi', function (Blueprint $table) {
            $table->string("kode")->unique()->index();
            $table->string("nama")->unique()->index();
            $table->string("dk")->nullable();
            $table->string("kelas")->nullable();
            $table->string("balinc")->nullable();
            $table->string("urutfbi")->nullable();
            $table->string("urutkbi")->nullable();
            $table->string("klpbi")->nullable();
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
