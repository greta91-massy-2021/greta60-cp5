<?php

/**
 * Renvoie l'écart en années entre deux dates passées en paramètres
 * @param string $date1 une chaine contenant une date (Exemple : '1998-07-13')
 * @param string $date2 une autre chaine contenant une date (Exemple : '12/31/2001')
 * @return int âge en nombre d'années
 */

function age(string $date1, string $date2): int
{
    if ((bool) strtotime($date1) && (bool) strtotime($date2)) {
        $d1 = strtotime($date1);
        $d2 = strtotime($date2);
        if ($d1 > $d2) {
            $gap = $d1 - $d2;
        } elseif ($d2 > $d1) {
            $gap = $d2 - $d1;
        } else {
            $gap = 0;
        }
        return floor($gap / 60 / 60 / 24 / 365.25);
    } else {
        trigger_error('L\'un des deux paramètres n\'est pas une date.', E_USER_ERROR);
        return false;
    }
}
