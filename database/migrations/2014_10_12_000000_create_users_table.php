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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama_depan');
            $table->string('nama_belakang');
            $table->string('email')->unique();
            $table->enum('gender', ["F", "M"]);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('alamat');
            $table->string('no_telp');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
