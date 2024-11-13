<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('car_name');
            $table->string('car_number');
            $table->text('description');
            $table->timestamps();
        });
        
    }

    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
