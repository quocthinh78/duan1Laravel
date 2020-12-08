<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBillpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('billproduct', function (Blueprint $table) {
            $table->unsignedBigInteger('id_bill')->unsigned();
            $table->foreign('id_bill')->references('id')->on('bill');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('billproduct', function (Blueprint $table) {
            //
        });
    }
}
