<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIbadah1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ibadah1', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode',100)->unique();
            $table->string('nama');
            $table->string('alamat');
            $table->string('gender');

            $table->string('email');

            $table->string('tgl');
            $table->string('waktu', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ibadah1');
    }
}
