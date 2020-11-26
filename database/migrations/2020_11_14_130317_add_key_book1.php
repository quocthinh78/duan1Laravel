<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddKeyBook1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('book1', function (Blueprint $table) {
            $table->unsignedBigInteger('cat_id')->unsigned();
            $table->foreign('cat_id')->references('id')->on('category');
            $table->unsignedBigInteger('author_id')->unsigned();
            $table->foreign('author_id')->references('id')->on('author');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('book1', function (Blueprint $table) {
            //
        });
    }
}
