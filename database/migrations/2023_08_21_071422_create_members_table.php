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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->date('bod');
            $table->string('password');
            $table->string('contact')->nullable();
            $table->string('address')->nullable();
            $table->enum('gender', ['male','female']);
            $table->integer('year_in')->nullable();
            $table->unsignedBigInteger('church_id');
            $table->unsignedBigInteger('interest_id');
            $table->unsignedBigInteger('education_id');
            $table->boolean('is_verified');
            $table->timestamps();

            $table->foreign('church_id')->references('id')->on('churches')->onDelete('cascade');
            $table->foreign('interest_id')->references('id')->on('interests')->onDelete('cascade');
            $table->foreign('education_id')->references('id')->on('educations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
