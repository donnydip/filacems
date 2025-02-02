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
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('greetings', 30)->nullable();
            $table->string('name', 25)->nullable();
            $table->string('jobTitle', 100)->nullable();
            $table->string('motto', 150)->nullable();
            $table->string('aboutHeader', 25)->nullable();
            $table->text('aboutContent')->nullable();
            $table->string('picture', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};
