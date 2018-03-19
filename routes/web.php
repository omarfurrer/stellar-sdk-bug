<?php
use ZuluCrypto\StellarSdk\Keypair;
/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */

Route::get('/',
           function () {
    // GD4JRFLPF4AGYQTLCMZ7Q7DRLGQZQTGWOOKDUCNRVKG66G5ZVYYFT76M
    $keypair = Keypair::newFromSeed('SAA2U5UFW65DW3MLVX734BUQIHAWANQNBLTFT47X2NVVBCN7X6QC5AOG');
//    dd($keypair->getPublicKey());
    var_dump($keypair->getPublicKey());
    
     // GDLBB6ETPA7ZFLVUB7NJUDAV7LMYP3HXGHDEBOBYZHR5DNNGEGOVXKM3
    $keypair = Keypair::newFromSeed('SBODA4LVYPBPOXU5DOXTD4WNFONY56GGHAJRCYSNORDC4FTDHOR2FONF');
    dd($keypair->getPublicKey());
    
    return view('welcome');
});
