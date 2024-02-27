<?php

// premenné:
$dni = ['nedeľa', 'pondelok', 'utorok', 'streda', 'štvrtok', 'piatok', 'sobota'];
$mesiace = [1 => 'januára', 'februára', 'marca', 'apríla', 'mája', 'júna', 'júla', 'augusta', 'septembra', 'októbra', 'novembra', 'decembra'];

// definovanie vlastných funkcií

function getCurrentDateString(): string
{
    // globálne premenné - aby bolo možné v rámci funkcie použiť premenné $dni a $mesiace
    global $dni, $mesiace;

    $dateString = $dni[date('w')] . ', ' . date('d') . '. ' . $mesiace[date('n')] . ' ' . date('Y') . ' ' . date('H:i:s');
    return $dateString;
}
