<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDimaluxury3Table extends Migration
{
    public function up()
    {
        Schema::create('dimaluxury3', function (Blueprint $table) {

		$table->bigIncrements('id')->unsigned();
		$table->string('SKU',6);
		$table->string('Product',43);
		$table->string('Location',11);
		$table->string('Unit_Price',11);
		$table->string('Current_stock',37);
		$table->string('Current_Stock_Value_By_purchase_price',14);
		$table->string('Current_Stock_Value_By_sale_price',15);
		$table->string('Potential_profit',15);
		$table->string('Total_unit_sold',35);
		$table->string('Total_Unit_Transfered',8);
		$table->string('Total_Unit_Adjusted',8);
		$table->integer('Column_12',);
		$table->integer('Column_13',);

        });
    }

    public function down()
    {
        Schema::dropIfExists('dimaluxury3');
    }
}