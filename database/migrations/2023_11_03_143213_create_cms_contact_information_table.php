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
        Schema::create('cms_contact_information', function (Blueprint $table) {
            $table->id();
            $table->string('phone_number')->default('');
            $table->string('email')->default('');
            $table->string('address')->default('');
            $table->string('map_url')->default('');
            $table->string('whatsapp_url')->default('');
            $table->string('facebook_url')->default('');
            $table->string('instagram_url')->default('');
            $table->string('twitter_url')->default('');
            $table->string('youtube_url')->default('');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cms_contact_information');
    }
};
