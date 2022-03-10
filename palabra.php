<?php
    //se obtiene la palabra con el metodo GET
    $palabra = $_GET['palabra'];
    //se cuenta el tamaño de la cadena
    $tamano=strlen($palabra);
    //se recorre la frase y se separa elemento por elemento desde la primera letra hasta la ultima letra o elemento del arreglo
    for ($i=0; $i <$tamano ; $i++) {
        //se asigna la posicion en cada iteracion
       $palabra[$i];
       //se almacena en una variable para despues conpararla
       $p1=$palabra[$i];
        
    }
    //se recorre la frase y se separa elemento por elemento desde la ultima letra hasta la primera
    for ($j=$tamano-1; $j >=0; $j--) { 
        //se asigna la posicion en cada iteracion
        $palabra[$j];
        //se almacena en una variable para despues conpararla
        $p2=$palabra[$j];
    }
    //se comparan los resultados de for y si ambos arreglos tienen el mismo elemento en la misma posicion son iguales es palindrome en caso contrario no es
    if ($p1==$p2) {
        echo "La palabra >>>>> <b> $palabra </b> <<<<<  <b> ES PALINDROME</b>";
    }else{
        echo "La palabra >>>>> <b> $palabra </b> <<<<<  <b> NO ES PALINDROME</b>";
    }
?>