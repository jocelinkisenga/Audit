<?php

declare(strict_types=1);

namespace Modules\Payroll\Enums;

/**
 * Summary of EtatCivilEnum
 * cette enum retourne les données de l'tat civil d'une personne
 * @Marie @const
 */
enum EtatCivilEnum
{
    const MARIE = "Marié (e)";

    const CELIBATAIRE = "celibataire";

    const VEUF = "veuf/veuve";
}
