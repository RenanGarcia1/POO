<?php
    class carro{		//nome da classe é sempre com inicial maiúscula. Corrigir todas as classes
      //falta a criação dos atributos aqui

      //os getters e setters tem que seguir o padrão camelCase.
        public function getmarca(){ //getMarca, ao invés de getmarca
            return $this -> marca;
        }
        public function setmarca($argmarca){
             $this -> marca = $argmarca;
        }
         public function getcor(){
            return $this -> cor;
        }
        public function setcor($argcor){
             $this -> cor = $argcor;
        }
         public function getplaca(){
            return $this -> placa;
        }
        public function setplaca($argplaca){
             $this -> placa = $argplaca;
        }
         public function getmodelo(){
            return $this -> modelo;
        }
        public function setmodelo($argmodelo){
             $this -> modelo = $argmodelo;
        }
    }
?>
