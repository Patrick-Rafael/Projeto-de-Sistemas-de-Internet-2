<?php
	
	 class Pessoa{

		private $mae;
		private $pai;
		private $nome;
		private $idade;

		public function __get($atributo){
			return $this -> $atributo;
		} 


		public function __set($atributo, $entrada){
			$this ->$atributo = $entrada;
		} 

		public function MaePai(){
			echo "Nome da mãe: ".$this -> __get('mae')-> __get('nome').", "."Nome do pai: ".$this ->__get('pai')->__get('nome');
		} 
	}

	$pai = new Pessoa();
	$pai ->__set('nome','Toin');


	$mae = new Pessoa();
	$mae ->__set('nome','Patricia');

	$eu = new Pessoa ();
	$eu ->__set('nome','Putrack');
	$eu ->__set('pai',$pai);
	$eu ->__set('mae',$mae);


	$eu -> MaePai();

?>