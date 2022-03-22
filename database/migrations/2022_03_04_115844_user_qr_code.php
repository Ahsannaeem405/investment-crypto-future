<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserQrCode extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->text('bnb_file')->nullable();
            $table->text('bitcoin_file')->nullable();
            $table->text('usdt_file')->nullable();
            $table->text('eth_file')->nullable();
            $table->text('shi_file')->nullable();
            $table->text('ada_file')->nullable();
            $table->text('ada')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
