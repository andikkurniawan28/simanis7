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
        Schema::create('rekmain', function (Blueprint $table) {
            $table->string("kdprs")->nullable();
            $table->string("kode")->unique()->index();
            $table->string("nama")->unique()->index();
            $table->string("urutfbi")->nullable();
            $table->string("rekbi")->nullable();
            $table->string("urutkbi")->nullable();
            $table->string("klpbi")->nullable();
            $table->string("dk")->nullable();
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
