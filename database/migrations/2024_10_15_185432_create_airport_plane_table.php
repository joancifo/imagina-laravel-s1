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
        Schema::create('airport_plane', function (Blueprint $table) {
            $table->foreignIdFor(\App\Models\Airport::class)->constrained();
            $table->foreignIdFor(\App\Models\Plane::class)->constrained();
            $table->timestamps();

            $table->unique([
                'airport_id',
                'plane_id'
            ]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('airport_plane');
    }
};
