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
        Schema::create('calendar_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('calendar_id')
                ->constrained('calendars')
                ->onDelete('cascade');
            $table->foreignId('user_id')
                ->constrained('users')
                ->onDelete('cascade');

            //roles 0 = viewer, 1 = editor, 2 = owner
            $table->integer('role');
            $table->timestamps();

            $table->unique(['calendar_id', 'user_id']);
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
