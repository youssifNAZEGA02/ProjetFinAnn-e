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
        Schema::create('lignecommandes', function (Blueprint $table) {
            $table->id('lignecommande_id');
            $table->string('typeDeViande');
            $table->integer('quantite');
            $table->integer('prix');
            $table->string('date');
            $table->integer('user_id');

            $table->timestamps();
            $table->foreign('user_id')->references('user_id')->on('users')->cascadeOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lignecommandes');
    }
};
