<?php

class ContaBancaria
{

    private string $banco;
    private string $nomeTitular;
    private string $numAgencia;
    private string $numConta;
    private float $saldo;


    public function __construct(string $banco, string $nomeTitular, string $numAgencia, string $numConta,float $saldo)
   {
       $this -> banco = $banco;
       $this -> nomeTitular = $nomeTitular;
       $this -> numAgencia = $numAgencia;
       $this -> numConta = $numConta;
       $this -> saldo = $saldo;
   }

   public function getSaldo()
   {
      return 'Seu saldo atual é de R$ ' . $this -> saldo;
   }

   public function depositar($valor)
   {
     $this -> saldo += $valor;
     return 'Depósito de R$ ' . $valor .' realizado';
   }

   public function sacar($valor)
   {
       $this -> saldo -= $valor;
       return 'Saque de R$ ' . $valor .' realizado';
   }
}