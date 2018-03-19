<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use ZuluCrypto\StellarSdk\Keypair;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }
    
    public function testKeypair()
    {
        $keyPair = Keypair::newFromSeed('SAA2U5UFW65DW3MLVX734BUQIHAWANQNBLTFT47X2NVVBCN7X6QC5AOG');
        $this->assertEquals("GD4JRFLPF4AGYQTLCMZ7Q7DRLGQZQTGWOOKDUCNRVKG66G5ZVYYFT76M", $keyPair->getPublicKey());
    }
}
