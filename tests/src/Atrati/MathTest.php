<?php

namespace Atrati;

class MathTest extends \PHPUnit_Framework_TestCase
{
    
    public function testVerificaSeOTipoDaClasseEstaCorreta()
    {
        $this->assertInstanceOf("Atrati\Math", new \Atrati\Math());
    }
    
}
