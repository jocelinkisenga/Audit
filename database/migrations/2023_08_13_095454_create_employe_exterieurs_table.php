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
        Schema::create('employe_exterieurs', function (Blueprint $table) {
            $table->id();
            $table->foreignId("entreprise_id");
            $table->string("name")->unique();
            $table->string("addresse");
            $table->string("phone")->unique();
            $table->string("town")->nullable();
            $table->string("province")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employe_exterieurs');
    }
};
