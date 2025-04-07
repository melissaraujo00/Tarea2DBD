<?php

use App\Models\ConservationTechnique;
use App\Models\Excavation;
use App\Models\Exhibition;
use App\Models\Material;
use App\Models\Publication;
use App\Models\Time;
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
        Schema::create('artifacts', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(Time::class)->constrained();
            $table->foreignIdFor(Material::class)->constrained();

            $table->string('name', 50);

            $table->foreignIdFor(Publication::class)->constrained();
            $table->foreignIdFor(Exhibition::class)->constrained();
            $table->foreignIdFor(ConservationTechnique::class)->constrained();
            $table->foreignIdFor(Excavation::class)->constrained();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artifacts');
    }
};
