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
        Schema::create('billdetails', function (Blueprint $table) {
           $table->bigInteger('bill_id');
           $table->bigInteger('product_id');
           $table->integer('amount');
           $table->bigInteger('price');
           $table->bigInteger('into_money');
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
