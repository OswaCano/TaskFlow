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
        Schema::create('event_participants', function (Blueprint $table): void {
          $table->id();
          $table->foreignId('event_id')
              ->constrained('events')
              ->onDelete('cascade');
          $table->foreignId('user_id')
              ->constrained('users')
              ->onDelete('cascade');

          //roles 0 = viewer, 1 = editor, 2 = owner
          $table->integer('role');

          //responses 0 = pending, 1 = accepted, 2 = rejected
          $table->integer('response');

          $table->dateTime('response_at')->nullable();

          $table->timestamps();
          $table->unique(['event_id', 'user_id']);
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
