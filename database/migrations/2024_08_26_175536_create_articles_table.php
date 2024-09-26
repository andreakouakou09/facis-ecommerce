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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->decimal('prix', 15, 0);
            $table->foreignId('categorie_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->string('image');
            $table->text('description');
            $table->integer('stock');
            $table->timestamps();
            $table->softDeletes();  // Ajoute la colonne deleted_at pour le soft delete
            $table->unsignedBigInteger('deleted_by')->nullable();  // Colonne pour l'utilisateur qui supprime
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {   
        Schema::dropIfExists('articles');
    }
};
