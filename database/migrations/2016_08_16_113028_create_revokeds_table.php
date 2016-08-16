<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRevokedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('revokeds', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('transaction_id');
            $table->integer('site_id');
            $table->integer('status_id');
            $table->integer('user_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('revokeds');
    }
}
