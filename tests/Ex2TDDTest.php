<?php

namespace Formacio\ExTema7\Tests;

use Formacio\ExTema7\Ex2;
use PHPUnit\Framework\TestCase;

class Ex2TDDTest extends TestCase {

    public function testVerificarNotaPrimeraDivision() {
        $ex2 = new Ex2();
        $notaAlum = 68;
        $result = $ex2->verificador($notaAlum); 
        $this->assertStringContainsString("El alumno es de primera Division con una nota del = " . $notaAlum . " % ",$result);
    }
}



?>