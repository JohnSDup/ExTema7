<?php

namespace Formacio\ExTema7\Tests;

use Formacio\ExTema7\Ex2;
use PHPUnit\Framework\TestCase;

class Ex2TDDTest extends TestCase {

    public function testVerificarStringNotaDivisiones() {
        $ex2 = new Ex2();
        $notaAlum = 68;
        $result = $ex2->verificador($notaAlum); 
        $this->assertStringContainsString("El alumno es de primera Division ",$result);
        
        $ex2 = new Ex2();
        $notaAlum = 58;
        $result = $ex2->verificador($notaAlum); 
        $this->assertStringContainsString("El alumno es de segunda Division ",$result);

        $ex2 = new Ex2();
        $notaAlum = 34;
        $result = $ex2->verificador($notaAlum); 
        $this->assertStringContainsString("El alumno es de tercera Division ",$result);
    }
    
    public function testVerifcarNotaMasPrimeraDivision() {
        $ex2 = new Ex2();
        $notaAlum = 105;
        $result = $ex2->verificador($notaAlum);
        $this->assertEquals("El alumno es de primera Division con una nota del = " . $notaAlum . " % ",$result);
    }
    public function testVerifcarNotaMasSegundaDivision() {
        $ex2 = new Ex2();
        $notaAlum = 58;
        $result = $ex2->verificador($notaAlum);
        $this->assertEquals("El alumno es de segunda Division con una nota del = " . $notaAlum . " % ",$result);
    }
    public function testVerificarNotaSuspendido() {
        $ex2 = new Ex2();
        $notaAlum = 10;
        $result = $ex2->verificador($notaAlum);
        $this->assertEquals("El alumno ha suspendido con una nota del = " . $notaAlum . " % ",$result);
    }
}
    
?>