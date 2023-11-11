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
        Schema::create('cms_agenda', function (Blueprint $table) {
            $table->id();
            $table->string('activity')->default('');
            $table->date('date');
            $table->date('start_date');
            $table->date('finish_date');
            $table->string('title')->default('');
            $table->text('note')->default('');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cms_agenda');
    }
};
