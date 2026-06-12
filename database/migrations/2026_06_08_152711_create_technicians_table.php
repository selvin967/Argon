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
        Schema::create('technicians', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('full_name',30);
            $table->string('phone_number',20)->nullable();
            $table->string('email',100)->unique();
            $table->date('hire_date')->nullable();
            $table->decimal('salary', 12, 2)->default(0);
            $table->enum('specialty', ['electrical', 'plumbing', 'HVAC'])->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('technicians');
    }
};
