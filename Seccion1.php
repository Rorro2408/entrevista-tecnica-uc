<?php
    // tareas es el input, editar para poder probar el codigo con distintos valores
    $tareas = [
        ["nombre" => "Reporte A", "tiempo" => 30],
        ["nombre" => "Backup B", "tiempo" => 10],
        ["nombre" => "Correos C", "tiempo" => 15],
        ["nombre" => "Limpieza D", "tiempo" => 20]
    ];

    function compararDuracionDeTareas($tarea1, $tarea2){
        if ($tarea1["tiempo"] == $tarea2["tiempo"]){
            return 0;
        }
        return ($tarea1["tiempo"] < $tarea2["tiempo"]) ? -1 : 1;
    }

    function ordenarTareasPorTiempo($tareas){
        uasort($tareas, 'compararDuracionDeTareas');
        return $tareas;
    }

    function seleccionarTareasARealizar($tareas, $tiempoMaximo){
        $tareasSeleccionadas = [];
        foreach($tareas as $tarea){
            $tiempoDeTarea = $tarea["tiempo"];
            $tiempoMaximo -= $tiempoDeTarea;
            if ($tiempoMaximo < 0){
                break;
            }
            $tareasSeleccionadas[] = $tarea["nombre"];
        }
        return $tareasSeleccionadas;
    }

    function optimizarTareas($tareas, $tiempoMaximo){
        $tareasOrdenadas = ordenarTareasPorTiempo($tareas);
        $tareasSeleccionadasARealizar = seleccionarTareasARealizar($tareasOrdenadas, $tiempoMaximo);
        return $tareasSeleccionadasARealizar;
    }

    function echoTareas($tareas){
        foreach ($tareas as $tarea){
            echo $tarea;
            echo "\n";
        }
    }

    $tiempoMaximo = 60; //Editar para diferentes duraciones en minutos
    $tareasSeleccionadasARealizar = optimizarTareas($tareas, $tiempoMaximo);
    echoTareas($tareasSeleccionadasARealizar); //Las tareas elegidas seran mostradas en consola
    
?>

