<?php

function Consulta_base_datos(){


        // DATOS DE CONEXIÓN

        $Servidor = "localhost";
        $Usuario =  "registro_usuarios";
        $Pass = "";
        $Nombre_base_de_datos = "registro_usuarios";
        $Tabla = "usuarios";
    
        //NUMERO TOTAL DE REGISTROS
            
            $sql_total = "SELECT `user_pass` FROM $Nombre_base_de_datos WHERE `user_name` LIKE $_POST['user_name']";

        /*WHERE 
            `titol` LIKE '%$Palabras_buscadas%' OR
            `director` LIKE '%$Palabras_buscadas%' OR
            `pais` LIKE '%$Palabras_buscadas%' OR
            `any` LIKE '%$Palabras_buscadas%' OR    
            `genre_name` LIKE '%$Palabras_buscadas%'
            ";
        */
        //CONEXIÓN CON LA BASE DE DATOS
    
            $conn = new mysqli($Servidor, $Usuario, $Pass, $Nombre_base_de_datos);
            $Resultado = $conn->query($sql_total);

        //COMPORBACIÓN DE LA CONEXIÓN
    
            if ($conn->connect_error){
    
                echo "Fallo en la conexión: ".$conn->connect_error;
                die();
            }
            else{
                echo "(Conexión con la base de datos establecida con éxito)<br><br>";
            }


    return $Resultado;
}

?>
