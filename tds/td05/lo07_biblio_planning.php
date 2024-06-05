<?php

function listeJourLabel() {
    return array(
        "lundi",
        "mardi",
        "mercredi",
        "jeudi",
        "vendredi"
    );
}


function listeJourIndice() {
    return range(1, 31);
}


function listeMois() {
    return array(
        "janvier",
        "février",
        "mars",
        "avril",
        "mai",
        "juin",
        "août",
        "septembre",
        "octobre",
        "novembre",
        "décembre"
    );
}


function listeSeance(){
    $horaires = array();

    // Boucle pour les heures de 8h00 à 17h00
    for ($heure = 8; $heure <= 17; $heure++) {
        for ($minute = 0; $minute <= 40; $minute += 20) {
            $heure_format = str_pad($heure, 2, '0', STR_PAD_LEFT);
            $minute_format = str_pad($minute, 2, '0', STR_PAD_LEFT);

            $horaires[] = "$heure_format:$minute_format";
        }
    }

    return $horaires;
}


function listeJoueur (){
    return range(2, 5);
}
?>