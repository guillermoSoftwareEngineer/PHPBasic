<?php

$horas = readline("Ingresar Horas: ");
$minutos = readline("Ingresar minutos: ");
$segundos = readline("Ingresar segundos: ");

$HoraAsegundos =  ($horas * 3600);
$minutoAsegundos =  ($minutos * 60);
$segundosaEntero = ($segundos);

$segundosTotales = $HoraAsegundos + $minutoAsegundos + $segundosaEntero;

echo "El total de segundos es: $segundosTotales ";

