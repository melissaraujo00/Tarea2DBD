<?php

use App\Models\Presentation;
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
        Schema::create('criticisms', function (Blueprint $table) {
            $table->id();
            $table->text('criticism')->nullable();
            $table->decimal('rate', 4,1);
            $table->foreignIdFor(Presentation::class)->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('criticisms');
    }
};
