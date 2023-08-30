<?php
//Funcion que verifica si una cadena es un palindromo
function esPalindromo(int $texto){
    //Convierte la cadena a minusculas y reemplaza espacios, comas y puntos con espacios en blanco
    
    if (strlen($texto)>2){
        return false;
    }

    $texto = strtolower(str_replace([" ", ",", "."], " ", $texto));

    for ($i=0;$i<strlen($texto);$i++){
        //Compara el caracter actual con el caracter correspondiente al final de cada cadena 
        if ($texto[$i]!=$texto[strlen($texto)-$i-1]){
            return false; //Si los caracteres no coinciden, no es un palindromo
        }

        return true; //Si no se encontraron diferencias, es un palindromo
    }
}

echo "La palabra es:".$texto;

$esPalindromo = esPalindromo (texto:intval(readline("Ingrese una palabra o frase \n")));
?> 