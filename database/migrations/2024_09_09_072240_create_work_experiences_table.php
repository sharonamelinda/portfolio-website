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
        Schema::create('work_experiences', function (Blueprint $table) {
            $table->id();
            $table->string('role');
            $table->string('company_name');
            $table->text('job_description');
            $table->string('logo');
            $table->foreignId('work_type_id')->constrained()->cascadeOnDelete();
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
        Schema::dropIfExists('work_experiences');
    }
};
