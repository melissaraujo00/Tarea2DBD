<?php

use App\Models\Dating;
use App\Models\ScientificMethod;
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
        Schema::create('dating_scientific_methods', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Dating::class)->constrained();
            $table->foreignIdFor(ScientificMethod::class)->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dating_scientific_methods');
    }
};
