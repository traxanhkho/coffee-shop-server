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
        //
        Schema::create('orders_statuses', function (Blueprint $table) {

            $table->foreignId('order_id')->onDelete('cascade');
            $table->foreignId('status_id')->onDelete('cascade');

            $table->primary(['order_id', 'status_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('orders_statuses');

    }
};
