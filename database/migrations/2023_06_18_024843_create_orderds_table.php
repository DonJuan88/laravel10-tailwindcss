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
        Schema::create('orderds', function (Blueprint $table) {
            $table->id();

            $table->string('transno');
            $table->string('itemcode');
            $table->string('itemname');
            $table->string('catcode');
            $table->integer('qty');
            $table->integer('baseprice');
            $table->integer('saleprice');
            $table->integer('discount');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orderds');
    }
};
