<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModeladminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('kuota', function (Blueprint $table) {
       $table->increments('id');
       $table->string('hari',10);
       $table->date('tgl');
       $table->string('waktu', 50);
       $table->integer('kuota1');
       $table->string('pelayan',100);

       $table->string('hari1',10);
       $table->date('tgl1');
       $table->string('waktu1', 50);
       $table->integer('kuota2');
       $table->string('pelayan1',100);

     });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('kuota');
    }
  }
