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
            $table->string('activity')->notnulldefault('');
            $table->date('date')->notnull();
            $table->date('start_date')->notnull();
            $table->date('finish_date')->notnull();
            $table->string('title')->notnulldefault('');
            $table->text('note')->notnulldefault('');
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
