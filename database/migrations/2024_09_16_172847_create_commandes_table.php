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
            $table->id();
            $table->foreignId('user_id')->constrained('users', 'id')->onDelete('cascade')->onUpdate('cascade');
            $table->decimal('total', 15, 0);
            $table->string('telephone');
            $table->text('adresse');
            $table->string('statut')->default('en attente'); // Statut de la commande (ex: en attente, confirmé, livré)
            $table->timestamps();
            $table->softDeletes();  // Ajoute la colonne deleted_at pour le soft delete
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
