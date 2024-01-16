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
        Schema::create('user_transaction_histories', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->constrained('users')->cascadeOnDelete();;
            $table->string('receiver');
            $table->decimal('amount', 10, 2);
            $table->string('transaction_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_transaction_histories');
    }
};
