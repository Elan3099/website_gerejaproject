<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
         $table->increments('id');
         $table->string('email',100)->unique();
         $table->string('password',100);
         $table->string('name',100);
         $table->string('alamat',30);
         $table->string('telp',15);
         $table->string('ttl',50);
         $table->string('jabatan',100);
         $table->rememberToken();
         $table->timestamps();
     });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('model_users');
    }
}
