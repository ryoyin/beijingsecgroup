<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTradingaccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tradingaccounts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sexual');
            $table->string('name');
            $table->string('tel');
            $table->string('address');
            $table->integer('account_no');
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
        Schema::drop('tradingaccounts');
    }
}
