<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('image')->default('default');
            $table->string('code');
            $table->string('name');
            $table->integer('category_id');
            $table->string('description')->default('-');
            $table->integer('total_stock')->default(0);
            $table->double('qty_receive')->default(0);
            $table->double('total_receive')->default(0);
            $table->double('qty_sales')->default(0);
            $table->double('total_sales')->default(0);
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('items');
    }
}
