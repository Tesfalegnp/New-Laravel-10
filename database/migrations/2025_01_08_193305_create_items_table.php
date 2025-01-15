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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('bed_type');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('room_id'); // Assuming you have a Room model
            $table->decimal('room'); // Assuming the related table is named 'rooms'
            $table->string('image')->nullable(); 
            $table->decimal('price', 8, 2); // Use decimal for storing prices with decimal places
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
