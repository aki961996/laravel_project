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
        Schema::create('users', function (Blueprint $table) {

            $table->bigIncrements('user_id');  //iid primary key
            $table->string('name', 50);
            $table->date('date_of_birth');
            $table->boolean('status')->default(1)->comment('1:active,0:Inactive');
            $table->timestamps();  //created_at and updated_at.

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
