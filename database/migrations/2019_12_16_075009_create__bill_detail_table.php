<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BillDetail', function (Blueprint $table) {
           $table->bigInteger('Bill_id');
           $table->bigInteger('Product_id');
           $table->integer('Amount');
           $table->bigInteger('Price');
           $table->bigInteger('IntoMoney');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('BillDetail');
    }
}
