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
        Schema::create('borrowers', function (Blueprint $table) {
            $table->bigIncrements('borrower_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender')->default('unknown');
            $table->date('date_of_birth');
            $table->text('msg')->nullable();
            $table->string('teams')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('borrowers');
    }
};
