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
        Schema::create('Tasks', function (Blueprint $table) {
            $table->id();
            $table->integer("UserID");
            $table->string("Title");
            $table->string("Description");
            $table->string("Priority");
            $table->string("Category");
            $table->string("Status");
            $table->date("Duedate");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Tasks');
    }
};
