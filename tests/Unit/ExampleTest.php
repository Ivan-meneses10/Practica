<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_that_true_is_true()
    {
        $this->assertTrue(true);
    }

    public function testSuma()
    {  
        $resultado = (new \App\Http\Controllers\Controller)->suma(3, 5);
        $this->assertEquals(7, $resultado);
    }

    public function testMultiplicion()
    {
        $resultado = (new \App\Http\Controllers\Controller)->multiplicion(4, 6);
        $this->assertEquals(20, $resultado);
    }

    public function testEsPositivo()
    {
        $resultado = (new \App\Http\Controllers\Controller)->esPositivo(7);
        $this->assertTrue($resultado);
    }

    public function testEsNumeroPar()
    {
        $resultado = (new \App\Http\Controllers\Controller)->esNumeroPar(10);
        $this->assertTrue($resultado);
    }

    public function testCalcularAreaTriangulo()
    {
        $resultado = (new \App\Http\Controllers\Controller)->calcularAreaTriangulo(4, 8);
        $this->assertEquals(16, $resultado);
    }
}
