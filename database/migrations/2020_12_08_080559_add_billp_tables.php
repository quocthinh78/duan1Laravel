<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBillpTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bill', function (Blueprint $table) {
            $table->integer('tongsoluong');
            $table->integer('loai');
            $table->float('tonggia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bill', function (Blueprint $table) {
            //
        });
    }
}
