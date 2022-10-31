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
        Schema::create('tb_products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('category_id')
                    ->constrained('tb_category')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->foreignId('unit_id')
                    ->constrained('tb_unit')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->float('stock_qty');
            $table->float('price');
            $table->float('re-order')->nullable();       
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
        Schema::dropIfExists('tb_products');
    }
};
