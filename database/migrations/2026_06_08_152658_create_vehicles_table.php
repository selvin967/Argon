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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('plate_number',20)->unique();
            $table->string('brand')->nullable();
            $table->enum('model', ['car', 'suv', 'truck', 'coupe'])->nullable();
            $table->year('year')->nullable();
            $table->enum('color', ['white', 'black', 'gray', 'blue', 'red', 'pink', 'yellow'])->nullable();
            $table->enum('fuel_type', ['gasoline', 'diesel', 'electric', 'hybrid'])->nullable();
            $table->foreignId('customer_id')->constrained('customers')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
