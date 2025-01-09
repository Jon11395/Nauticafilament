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
        Schema::create('contract_expenses', function (Blueprint $table) {
            $table->id();
            $table->integer('voucher');
            $table->timestamp('date');
            $table->string('concept')->nullable();
            $table->decimal('total_solicited', 19,4);
            $table->decimal('retentions', 19,4);
            $table->decimal('CCSS', 19,4);
            $table->decimal('total_deposited', 19,2);
            $table->foreignId('contract_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contract_expenses');
    }
};