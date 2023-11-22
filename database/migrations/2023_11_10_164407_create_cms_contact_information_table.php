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
            $table->string('phone_number')->notnulldefault('');
            $table->string('email')->notnulldefault('');
            $table->string('address')->notnulldefault('');
            $table->string('map_url')->notnulldefault('');
            $table->string('whatsapp_url')->notnulldefault('');
            $table->string('facebook_url')->notnulldefault('');
            $table->string('instagram_url')->notnulldefault('');
            $table->string('twitter_url')->notnulldefault('');
            $table->string('youtube_url')->notnulldefault('');
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
