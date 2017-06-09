<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAyasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ayas', function (Blueprint $table) {
            $table->integer('id')->unsigned();
            $table->integer('sura_id')->unsigned()->index();
            $table->text('text');
            $table->timestamps();
            $table->primary(['id', 'sura_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ayas');
    }
}
