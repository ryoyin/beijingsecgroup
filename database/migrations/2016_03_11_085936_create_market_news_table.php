<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarketNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //time, id, type, headline, content, stock code
        Schema::create('market_news', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('times');
            $table->integer('infocastid');
            $table->string('type');
            $table->string('headline');
            $table->longText('content');
            $table->string('stockcode');
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
        Schema::drop('market_news');
    }
}
