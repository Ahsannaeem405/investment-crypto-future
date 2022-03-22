<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Stat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Stats', function (Blueprint $table) {
            $table->id();
            $table->text('BTC')->nullable();
            $table->text('BNB')->nullable();
            $table->text('USDT')->nullable();
            $table->text('ETH')->nullable();
            $table->text('ADA')->nullable();
            $table->text('SIB')->nullable();

            
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
        //
    }
}
