<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScrapingCommandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scraping_commands', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("name",200);
            $table->string("cmd",200);
            $table->integer("cron1")->nullable();
            $table->integer("cron2")->nullable();
            $table->integer("cron3")->nullable();
            $table->integer("cron4")->nullable();
            $table->integer("cron5")->nullable();
            $table->integer("flg")->default(0);
            $table->softDeletes();
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
        Schema::dropIfExists('scraping_commands');
    }
}
