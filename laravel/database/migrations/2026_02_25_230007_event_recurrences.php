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
        Schema::create('event_recurrences', function (Blueprint $table) {
           $table->id();
           $table->foreignId('event_id')
               ->constrained('events')
               ->onDelete('cascade');

           // frequencies 0 = daily, 1 = weekly, 2 = monthly
           $table->integer('frequency');
           $table->integer('interval')->default(1);
           $table->date('until_date')->nullable();

           $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
