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
        Schema::create('cms_visi_misi', function (Blueprint $table) {
            $table->id();
            $table->text('visi1')->default('');
            $table->text('visi2')->default('');
            $table->text('visi3')->default('');
            $table->text('visi4')->default('');
            $table->text('visi5')->default('');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cms_visi_misi');
    }
};
