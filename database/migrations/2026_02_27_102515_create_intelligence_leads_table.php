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
        Schema::create('intelligence_leads', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('email')->unique();

            $table->string('country')->nullable();
            $table->string('industry')->nullable();

            $table->enum('selected_plan', ['free', 'card', 'paypal']);

            $table->boolean('converted')->default(false);

            $table->timestamps();
        });
    }

    /**x
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('intelligence_leads');
    }
};
