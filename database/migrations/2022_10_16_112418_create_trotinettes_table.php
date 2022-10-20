<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('trotinettes', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->integer('categorie_id');
            $table->string('vitesse');
            $table->string('poids');
            $table->string('couleur');
            $table->string('prix');
            $table->string('prix_location');
            $table->string('quantite');
            $table->timestamps();
            $table->foreign('categorie_id')->references('type')->on('categorie_t_s')->onDelete('cascade');
            

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trotinettes');
    }
};
