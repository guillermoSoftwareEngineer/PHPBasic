<?php
// este programa tiene saltos de linea con <br> por que esta hecho para ejecutarse en el browser mediante un servidor

echo "la etiqueta ?php se usa para iniciar en php <br>";
echo "En php se usa \"echo\" para escribir mensajes de texto <br>" ;
echo "la etiqueta \"/n\" se usa para hacer salto de linea en ejecucion de php desde la terminal <br>";
echo "la < br > se usa para hacer saltos de linea desde el HTML <br>";
echo "\".\" El punto se usa para concatenar <br>";
echo "Tambien se usa $ { } para concatenar <br>";
$multiplicacion = (3*2);
echo " se pueden concatenar numeros con . por ejemplo 3 x 2 es $multiplicacion <br> " ;


$nombre = "Guillermo";
$apellido = "Vasquez";

echo "hola mi nombre es " . $nombre . " " . $apellido . " y tengo 39 años  <br>";

echo "Las constantes se definen con la palabra define(\"nombreConstante,valorConstante\") ej: define(\"numeroPi\",3,14)  <br> ";
define("numeroPi", 3.14);
echo "y para llamarlo usamos echo \"numeroPi\"  <br>";
echo "lo cual escribiria 3,14  <br>";
echo numeroPi; 

echo "<br> ejercicios <br>";
$name ="Jose";
$secondName = "Benitez";
$age = 39;
$booleanState = false;


echo "el nombre es " . $name . " " . $secondName . " y que su edad sea " . $age . " es " . $booleanState . " false <br>"  ;
var_dump($booleanState);
echo "<br>";

$averange = (3 + 7.2 + 8 + 4 + 7.8) / 5;
echo "el promedio de (3 + 7.2 + 8 + 4 + 7.8) / 5 es: <br>";
echo "$averange";

echo "<br> Operadores logicos and (&&), or (||), not(!), <br> ";
echo "declaramos dos variables \$condition1 = true y \$condition2 = false <br> ";
$condition1 = true ;
$condition2 = false ;
echo "ahora hacemos la operaacion and \$condition1 && \$condition2 y nos da: <br>";
$resultAnd = $condition1 && $condition2;
echo $resultAnd;
echo "false";



