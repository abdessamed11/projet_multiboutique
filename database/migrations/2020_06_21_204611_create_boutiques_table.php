<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoutiquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boutiques', function (Blueprint $table) {
            $table->id();
            $table->string('nom_boutique');
            $table->string('telephone');
            $table->string('image_boutique');
            $table->string('lien_map1');
            $table->string('lien_map2');
            $table->string('site_web');
            $table->string('desc_boutique');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('id_ville');
            $table->foreign('id_ville')->references('id')->on('villes');
            $table->unsignedBigInteger('id_categorie_boutique');
            $table->foreign('id_categorie_boutique')->references('id')->on('categorie_boutiques');
            $table->timestamps();
            
            // $table->foreignId('id_categorie_boutique')          
            //             ->references('id')
            //             ->on('categorie_boutiques')
            //             ->onDelete('restrict')
            //             ->onUpdate('restrict');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boutiques');
    }
}
