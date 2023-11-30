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
        Schema::create('provider_type_product', function (Blueprint $table) {
            $table->id();

            $table->foreignId('provider_id')->nullable()->constrained('providers')
            ->cascadeOnUpdate()->nullOnDelete();

            $table->foreignId('type_product_id')->nullable()->constrained('type_products')
            ->cascadeOnUpdate()->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('provider_type_product');
    }
};
