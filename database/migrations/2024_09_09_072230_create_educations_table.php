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
        Schema::create('educations', function (Blueprint $table) {
            $table->id();
            $table->string('degree');
            $table->string('major');
            $table->string('institution_name');
            $table->decimal('grade', 3, 2);
            $table->string('logo');
            $table->date('start_year');
            $table->date('end_year');
            $table->foreignId('start_month_id')->constrained('months')->cascadeOnDelete();
            $table->foreignId('end_month_id')->constrained('months')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('educations');
    }
};
