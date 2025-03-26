<?php 
    class ContaBancaria // Classe
    {
        //Atributos || Propridades
        private $banco;
        private $nomeTitular;
        private $numeroAgencia;
        private $numeroConta;
        private $saldo;

        public function __construct($banco, $nomeTitular, $numeroAgencia, $numeroConta, $saldo)
        {
            $this -> banco = $banco;
            $this -> nomeTitular = $nomeTitular;
            $this -> numeroAgencia = $numeroAgencia;
            $this -> numeroConta = $numeroConta;
            $this -> saldo = $saldo;
        }

        //Método 
        public function ObterSaldo(){
            return 'Saldo atual: R$'.$this->saldo;
        }

        public function Depositar($valor){
            $this->saldo += $valor;
            return 'Depósito de R$' .$valor. ' realizado!';
        }

        public function Sacar($valor){
            $this->saldo -= $valor;
            return 'Saque de R$' .$valor. ' realizado!';
        }
    }

    $conta = new ContaBancaria('Banco do Brasil', 'João Teixeira', '3696', '7845-8', 500.00); // Objeto

    echo $conta->ObterSaldo();

    echo PHP_EOL;

    echo $conta->Depositar(400.00);

    echo $conta->ObterSaldo();

    echo PHP_EOL;

    echo $conta->Sacar(800.00);

    echo $conta->ObterSaldo();
?>