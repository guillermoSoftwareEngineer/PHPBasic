<?php
// // este programa tiene saltos de linea con \n por que esta hecho para ejecutarse en la terminal

$number = 3;
$number2 = 5;

$suma = $number + $number2;
$resta = $number - $number2;
$multiplicacion = $number * $number2;
$division = $number / $number2;
$modulo = $number % $number2;
$expo = $number ** $number2;



echo " el resultado de la suma de 3 + 5 es $suma \n";
echo " el resultado de la resta de 3 - 5 es $resta \n";
echo " el resultado de la multiplicacion de 3 x 5 es $multiplicacion \n";
echo " el resultado de la division de 3 / 5 es $division \n";
echo " el resultado de la modulo de 3 % 5 es $modulo \n";
echo " el resultado de la expo de 3 ^ 5 es $expo \n";

echo "los operadores de php son los mismos con las mismas fuciones, asignacion (=) \n";
echo "identidad (==) \n";
echo "identidad especifica (===) \n";
echo "mayor o igual (>=) \n";
echo "menor o igual (<=) \n";
echo "diferente de  (!=) \n";
echo "no identico (!==) \n";
echo "no identico especifico en tipo de dato (!==) \n\n";
echo "EXISTEN DOS TIPOS ESPECIALES DE PHP \n\n";
echo "OPERADOR DE NAVE ESPACIAL (<=>) \n\n";
echo "Retorna 1 si a es mayor que b (a<=>b) \n";
echo "Retorna 0 si a es igual a b (a<=>b) \n";
echo "Retorna -1 si b es mayor que a (a<=>b) \n\n";
echo "FUNCION DE NULL (??) \n\n";
echo "Retorna b si a no esta definida o es null (a ?? b)\n\n";
echo "OPERADOR DE INCREMENTO \n\n";
echo "El operador de incremento (+= a) hace que se sume el valor de 0 \n";
echo "por ejemplo si a = 0 si ponemos a + = 1 obtendremos 1 en la salida\n";
echo "tambien funciona a++\n";

$contador = 0;
$mayorcontador = $contador += 1; //da 1 por precedencia de los operadores
echo "$contador \n";

echo "tambiem funciona el decremento pero resta con -= con la multiplicacio *=, con la division /= etc";






