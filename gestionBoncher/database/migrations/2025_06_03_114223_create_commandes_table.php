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
        Schema::create('commandes', function (Blueprint $table) {
            $table->id('commande_id');
            $table->string('prixTotal');
            $table->string('quantiteTotal');
            $table->string('date');
            $table->integer('lignecommande_id');
            $table->timestamps();
            $table->foreign('lignecommande_id')->references('ligncommande_id')->on('lignecommandes')->cascadeOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commandes');
    }
};
