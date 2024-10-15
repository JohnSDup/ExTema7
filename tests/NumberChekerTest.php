<?php

namespace Formacio\ExTema7\Tests;

use Formacio\ExTema7\NumberCheker;
use PHPUnit\Framework\TestCase;

class NumberChekerTest extends TestCase {
    public function testEsPar() {
        $numeroPar = new NumberCheker(2);
        $this->assertTrue($numeroPar->isEven());
        $numeroPar = new NumberCheker(-6);   
        $this->assertEquals(true,$numeroPar->isEven());

    }
    public function testEsNegativo() {
        $numeroImpar = new NumberCheker(9);
        $this->assertTrue($numeroImpar->isPositive()); 
        $numeroImpar = new NumberCheker(-1);  
        $this->assertEquals(false,$numeroImpar->isPositive());
        
    }
    
}