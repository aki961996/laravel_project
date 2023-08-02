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
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('client_id');

            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('email', 200);
            $table->string('phone_number', 100)->nullable(); // Remove 'after' here
            $table->string('Street', 100);
            $table->string('apartment', 100)->nullable();
            $table->string('city', 100);
            $table->string('State', 100);
            $table->string('zip_code', 100)->nullable();
            $table->tinyInteger('status')->default(1)->comment('1:active,0:Inactive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
