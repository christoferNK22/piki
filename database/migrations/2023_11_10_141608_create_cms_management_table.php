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
        Schema::create('cms_management', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default('');
            $table->enum('dewan', ['penasihat', 'pakar', 'pengurus']);
            $table->enum('position', 
                        ['ketua', 'wakil_ketua', 'sekertaris', 'wakil_sekertaris', 
                        'bendahara', 'wakil_bendahara', 'anggota']);
            $table->string('origin')->default('');
            $table->string('image')->default('');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cms_management');
    }
};
