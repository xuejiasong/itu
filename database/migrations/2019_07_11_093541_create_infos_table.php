<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lawImg');
            $table->string('faceImg');
            $table->string('takeImg');
            $table->string('name')->unique()->index();
            $table->string('phone')->unique()->index();
            $table->string('code')->unique()->index();
            $table->date('lawDate')->index();
            $table->string('place');
            $table->string('lawType');
            $table->integer('state')->index();
            $table->string('author');
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
        Schema::dropIfExists('infos');
    }
}
