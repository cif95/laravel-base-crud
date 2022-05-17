<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique()->nullable(false);
            $table->text('description')->nullable(false);
            $table->text('thumb')->nullable();
            $table->float('price')->nullable(false);
            $table->string('series')->nullable(false);
            $table->date('sale_date')->nullable();
            $table->string('type')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comics');
    }
}
