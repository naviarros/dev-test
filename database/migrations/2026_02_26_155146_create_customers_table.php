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
        Schema::create('customers', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->index();
            $table->string('gender', 20)->nullable();
            $table->string('ip_address', 45)->nullable(); // supports ipv6 addresses
            $table->string('company')->nullable();
            $table->string('city')->nullable();
            $table->string('title')->nullable();
            $table->text('website')->nullable(); // handles long text

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
