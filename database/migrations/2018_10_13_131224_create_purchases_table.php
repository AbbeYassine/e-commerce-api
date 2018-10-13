<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Purchase', function (Blueprint $table) {
            $table->increments('purchase_id');

            $table->integer("quantity");

            # User Relation
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                ->references('user_id')
                ->on('User')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            # Product Relation
            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')
                ->references('product_id')
                ->on('Product')
                ->onDelete('cascade')
                ->onUpdate('cascade');


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
        Schema::table("Purchase", function (Blueprint $t) {
            $t->dropForeign(['product_id']);
            $t->dropForeign(['user_id']);
        });
        Schema::dropIfExists("Purchase");
    }
}
