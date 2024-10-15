<?php

namespace Formacio\ExTema7;

Class Ex2 {
    public function verificador($notaAlum) {


    if ($notaAlum >= 60) {
        return "El alumno es de primera Division con una nota del = " . $notaAlum . " % ";
    } else if ($notaAlum >= 45) {
        return "El alumno es de segunda Division con una nota del = " . $notaAlum . " % ";
    } else if ($notaAlum >= 33) {
        return "El alumno es de tercera Division con una nota del = " . $notaAlum . " % "; 
    } else {
        return "El alumno ha suspendido con una nota del = " . $notaAlum . " % ";
    }
}
}
$ex2 = new Ex2();

echo $ex2->verificador(-35);

?>