<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_purchase', function (Blueprint $table) {
            $table->engine = 'InnoDB'; //Add this line
            $table->id();
            $table->foreignId('product_id')
                    ->constrained('tb_products')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->foreignId('supplier_id')
                    ->constrained('tb_supplier')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->float('quantity');
            $table->float('unit_price');
            $table->integer('amount');
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
        Schema::dropIfExists('tb_purchase');
    }
};
