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
        Schema::create('declaration_entreprise_dgis', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("nbr_nat_non_imposable")->nullable();
            $table->bigInteger("nbr_nat_imposable")->nullable();
            $table->bigInteger("nbr_expat_non_imposable")->nullable();
            $table->bigInteger("nbr_expat__imposable")->nullable();
            $table->bigInteger("nbr_associes_actifs")->nullable();
            $table->bigInteger("nbr_exploitant_individuel")->nullable();
            $table->bigInteger("nbr_personnel_occasionnel")->nullable();
            
            $table->bigInteger("brute_nat_non_imposable")->nullable();
            $table->bigInteger("brute_nat_imposable")->nullable();
            $table->bigInteger("brute_expat_non_imposable")->nullable();
            $table->bigInteger("brute_expat__imposable")->nullable();
            $table->bigInteger("brute_associes_actifs")->nullable();
            $table->bigInteger("brute_exploitant_individuel")->nullable();
            $table->bigInteger("brute_personnel_occasionnel")->nullable();

            $table->bigInteger("imposable_nat_non_imposable")->nullable();
            $table->bigInteger("imposable_nat_imposable")->nullable();
            $table->bigInteger("imposable_expat_non_imposable")->nullable();
            $table->bigInteger("imposable_expat__imposable")->nullable();
            $table->bigInteger("imposable_associes_actifs")->nullable();
            $table->bigInteger("imposable_exploitant_individuel")->nullable();
            $table->bigInteger("imposable_personnel_occasionnel")->nullable();

            $table->bigInteger("Ipr_nat_non_imposable")->nullable();
            $table->bigInteger("Ipr_nat_imposable")->nullable();
            $table->bigInteger("Ipr_expat_non_imposable")->nullable();
            $table->bigInteger("Ipr_expat__imposable")->nullable();
            $table->bigInteger("Ipr_associes_actifs")->nullable();
            $table->bigInteger("Ipr_exploitant_individuel")->nullable();
            $table->bigInteger("Ipr_personnel_occasionnel")->nullable();

            $table->bigInteger("ier_nat_non_imposable")->nullable();
            $table->bigInteger("ier_nat_imposable")->nullable();
            $table->bigInteger("ier_expat_non_imposable")->nullable();
            $table->bigInteger("ier_expat__imposable")->nullable();
            $table->bigInteger("ier_associes_actifs")->nullable();
            $table->bigInteger("ier_exploitant_individuel")->nullable();
            $table->bigInteger("ier_personnel_occasionnel")->nullable();
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
        Schema::dropIfExists('declaration_entreprise_dgis');
    }
};
