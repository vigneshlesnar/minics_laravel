<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jutes', function (Blueprint $table) {
          $table->id();
          $table->string("name");
          $table->string("price");
          $table->string("gallery");
          $table->string("gsm");
          $table->string("category");
          $table->string("discreption");
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
        Schema::dropIfExists('jutes');
    }
}
