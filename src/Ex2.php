<?php

namespace Formacio\ExTema7;

Class Ex2 {
    public function verificador() {
    //Nota del alumno;
    $notaAlum = 61;

    if ($notaAlum >= 60) {
        return "El alumno es de primera Division con una nota del = " . $notaAlum . " % ";
    } else {
        return "El alumno ha suspendido con una nota del = " . $notaAlum . " % ";
    }
}
}

?>