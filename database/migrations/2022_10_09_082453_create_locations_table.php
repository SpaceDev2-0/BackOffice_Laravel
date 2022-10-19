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
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('idVelo');
            $table->string('idClient');
            $table->string('idStation');
            $table->string('dateDebut');
            $table->string('dateFin');
            $table->string('prix');
            $table->string('statutPaiement');
            $table->string('statutLocation');
            $table->string('remarque');
            $table->string('idAgent');
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
        Schema::dropIfExists('locations');
    }
};
