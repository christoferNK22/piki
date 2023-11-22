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
            $table->text('visi1')->notnulldefault('');
            $table->text('visi2')->notnulldefault('');
            $table->text('visi3')->notnulldefault('');
            $table->text('visi4')->notnulldefault('');
            $table->text('visi5')->notnulldefault('');
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
