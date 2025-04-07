<?php

use App\Models\Musical;
use App\Models\Musician;
use App\Models\RehearsalChamber;
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
        Schema::create('rehearsals', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->time('start_time');
            $table->foreignIdFor(Musician::class)->constrained();
            $table->foreignIdFor(Musical::class)->constrained();
            $table->foreignIdFor(RehearsalChamber::class)->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rehearsals');
    }
};
