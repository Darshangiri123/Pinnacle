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
        Schema::create('publicchats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('group_id')->nullable();
            $table->string('publicChatName')->default('');
            $table->foreignId('sender_id')->nullable();
            $table->string('message')->nullable();
            $table->foreignId('receiver_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publicchats');
    }
};
