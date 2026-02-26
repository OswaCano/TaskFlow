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
        Schema::create('events', function (Blueprint $table) {
           $table->id();
           $table->string('name');
           $table->string('description')->nullable();
           $table->foreignId('calendar_id')
               ->constrained('calendars')
               ->onDelete('cascade');

           $table->foreignId('user_id')
               ->constrained('users')
               ->onDelete('cascade');

           $table->dateTime('start_event');
           $table->dateTime('end_event');

           $table->boolean('is_all_day')->default(false);

           // types 0 = informal, 1 = formal
           $table->integer('type');

           //status 0 = pending, 1 = confirmed 2 = canceled
           $table->integer('status');

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
