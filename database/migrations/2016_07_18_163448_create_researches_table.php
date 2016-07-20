<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResearchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('researches', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 20);
            $table->string('author', 10);
            $table->date('publish_date');
            $table->timestamp('publish_datetime');
            $table->smallInteger('status'); // 0-draft, 1-pending, 2-publish, 3-suspend, 4-delete
            $table->string('short_desc');
            $table->longText('description');
            $table->string('file_path');
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
        Schema::drop('researches');
    }
}
