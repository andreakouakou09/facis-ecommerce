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
        Schema::create('ligne_commandes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('commande_id')->constrained('commandes', 'id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('article_id')->constrained('articles', 'id')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('quantite');
            $table->decimal('prix', 15, 0); // Prix à l'achat (au cas où les prix changent)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ligne_commandes');
    }
};
