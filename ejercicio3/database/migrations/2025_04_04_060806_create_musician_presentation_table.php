<?php

use App\Models\Musician;
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
        Schema::create('musician_presentation', function (Blueprint $table) {
            $table->foreignIdFor(Musician::class)->constrained();
            $table->foreignIdFor(Presentation::class)->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('musician_presentation');
    }
};
