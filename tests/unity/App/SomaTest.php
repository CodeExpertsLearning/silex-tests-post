<?php
namespace App;

class SomaTest extends \PHPUnit_Framework_TestCase
{
     public function testSeASomaFuncionaCorretamente()
     { 
         $soma = new Soma();
         $result = $soma->fazSoma(15, 15);
         
          return $this->assertEquals(30, $result);
     }
}