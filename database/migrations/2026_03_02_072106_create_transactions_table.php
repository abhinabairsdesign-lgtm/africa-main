<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();

            $table->foreignId('intelligence_lead_id')
                  ->constrained()
                  ->onDelete('cascade');

            $table->string('payment_method'); // stripe, paypal

            $table->string('stripe_session_id')->nullable();
            $table->string('stripe_payment_intent')->nullable();

            $table->decimal('amount', 10, 2);
            $table->string('currency')->default('usd');

            $table->enum('status', ['pending', 'paid', 'failed'])
                  ->default('pending');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('transactions');
    }
};