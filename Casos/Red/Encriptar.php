<?php
    $archivo = 'Soluciones.txt';
    $lineas = file($archivo, FILE_IGNORE_NEW_LINES);
    echo "[";
    $Coma = 0;
    foreach($lineas as $linea){
        $Casito = password_hash("$linea", PASSWORD_DEFAULT);
        echo "\"";
        for($i = 0; $i < strlen($Casito); $i++){
            if($Casito[$i] == '$') echo "\\$";
            else echo $Casito[$i];
        }
        echo "\"";
        if($Coma < 9) echo ", ";
        $Coma++;
    }
    echo "];";
?>