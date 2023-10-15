<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employes_company', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->nullable();
            $table->string("nom");
            $table->string("postnom");
            $table->string("prenom");
            $table->string("matricule")->nullable();
            $table->string("date_naissance")->nullable();
            $table->string("addresse")->nullable();
            $table->string("contact_phone")->nullable();
            $table->string("etat_civile")->nullable();
            $table->foreignId('fonction_id')->nullable();
            $table->string("niveau_etude")->nullable();
            $table->integer("nombre_enfant")->nullable();
            $table->string("nom_complet_femme")->nullable();
            $table->string("contact_personne_fullname")->nullable();
            $table->string("contact_person_number")->nullable();
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
        Schema::dropIfExists('employes');
    }
};
