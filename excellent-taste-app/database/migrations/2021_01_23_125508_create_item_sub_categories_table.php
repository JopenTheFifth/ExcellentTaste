<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_sub_categories', function (Blueprint $table) {
           $table->string('sub_category_name');
           $table->string('sub_category_shorthand')->primary();

           $table->string('category_shorthand');
           $table->foreign('category_shorthand')->references('category_shorthand')->on('item_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_sub_categories');
    }
}
