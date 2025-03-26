<?php
    class Vendas{
        private $vendedor;
        private $produto;
        private $quantidade;
        private $data;
        private $valorTotal;

        public function __construct($vendedor, $produto, $quantidade, $data, $valorTotal)
        {
            $this -> vendedor = $vendedor;
            $this -> produto = $produto;
            $this -> quantidade = $quantidade;
            $this -> data = $data;
            $this -> valorTotal = $valorTotal;
        }

        public function ExibirVenda(){
            return 'Vendedor: ' .$this->vendedor. PHP_EOL. 
            'Produto: ' .$this->produto. PHP_EOL. 
            'Quantidade: ' .$this->quantidade. PHP_EOL.  
            'Data: ' .$this->data. PHP_EOL. 
            'Valor total: R$' .number_format($this->valorTotal, 2, ',', '.');
        }
    }

    $venda = new Vendas('João Teixeira', 'Monitor', '1', '26/03/2025', 600.00);

    echo $venda->ExibirVenda();
?>