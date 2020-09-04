<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('nom_produit');
            $table->string('image_produit')->nullable();
            $table->text('description')->nullable();
            $table->unsignedBigInteger('id_boutique');
            $table->foreign('id_boutique')->references('id')->on('boutiques');
            $table->unsignedBigInteger('id_categorie_produit');
            $table->foreign('id_categorie_produit')->references('id')->on('categorie_produits');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produits');
    }
}
