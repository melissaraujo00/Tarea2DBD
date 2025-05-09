<?php

use App\Models\Responsible;
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
        Schema::create('conservation_techniques', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Responsible::class);
            $table->string('name', 50);
            $table->text('description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conservation_techniques');
    }
};
