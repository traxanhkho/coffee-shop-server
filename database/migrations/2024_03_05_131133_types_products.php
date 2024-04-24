<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('types_products', function (Blueprint $table) {

            $table->foreignId('type_id')->onDelete('cascade');
            $table->foreignId('product_id')->onDelete('cascade');

            $table->primary(['type_id', 'product_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('types_products');
    }
};
