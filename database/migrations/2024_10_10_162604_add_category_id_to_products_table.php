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
        Schema::table('products', function (Blueprint $table) {
          //  $table->unsignedBigInteger('category_id')->nullable();
          //  $table->foreignId('category_id')->references('id')->on('categories');

            $table->foreignIdFor(\App\Models\Category::class)->nullable()->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
          $table->dropConstrainedForeignIdFor(\App\Models\Category::class);
        });
    }
};
