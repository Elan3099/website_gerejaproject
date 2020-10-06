<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModeladmin2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kuota2', function (Blueprint $table) {
           $table->increments('id');
           $table->string('hari',10);
           $table->date('tgl');
           $table->string('waktu', 50);
           $table->integer('kuota1');
           $table->string('pelayan',100);
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kuota2');
    }
}
