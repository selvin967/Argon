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
        Schema::create('maintenances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('vehicle_id')->constrained()->cascadeOnDelete();
            $table->enum('service_type', ['routine', 'major', 'minor'])->nullable();
            $table->date('entry_date')->nullable();
            $table->date('estimated_delivery_date')->nullable();
            $table->unsignedInteger('current_mileage')->nullable();
            $table->foreignId('technician_id')->constrained()->cascadeOnDelete();
            $table->text('work_description')->nullable();
            $table->decimal('spare_parts_cost', 12, 2)->default(0);
            $table->decimal('labor_cost', 12, 2)->default(0);
            $table->decimal('total_cost', 12, 2)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maintenances');
    }
};
