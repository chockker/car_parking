<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblParksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_parks', function (Blueprint $table) {
            $table->id();
            $table->string('park_id');
            $table->string('type');
            $table->string('car_id')->nullable();
            $table->integer('park_status');
            $table->integer('park_check');
            $table->integer('day_amount');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_parks');
    }
}
