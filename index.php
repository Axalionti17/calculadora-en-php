
<?php
function sumar($a, $b) {
    return $a + $b;
}

function restar($a, $b) {
    return $a - $b;
}

function multiplicar($a, $b) {
    return $a * $b;
}

function dividir($a, $b) {
    if ($b == 0) {
        return "Error: División por cero.";
    }
    return $a / $b;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = isset($_POST['num1']) ? $_POST['num1'] : null;
    $num2 = isset($_POST['num2']) ? $_POST['num2'] : null;
    $operacion = isset($_POST['operacion']) ? $_POST['operacion'] : null;

    if (is_null($num1) || is_null($num2) || is_null($operacion)) {
        echo "Error: Todos los campos son obligatorios.";
        exit;
    }

    if (!is_numeric($num1) || !is_numeric($num2)) {
        echo "Error: Los valores ingresados deben ser números.";
        exit;
    }
    switch ($operacion) {
        case "suma":
            $resultado = sumar($num1, $num2);
            break;
        case "resta":
            $resultado = restar($num1, $num2);
            break;
        case "multiplicacion":
            $resultado = multiplicar($num1, $num2);
            break;
        case "division":
            $resultado = dividir($num1, $num2);
            break;
        default:
            $resultado = "Error: Operación no válida.";
            break;
    }

    echo "El resultado de la operación es: " . $resultado;
}



    ?>