<?php


class Lutador {
    //Atributos
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;
    //Metodos
   function apresentar(){
       echo"<p>---------------------------------</p>";
       echo"<p>CHEGOU A HORA! O Lutador " . $this->getNome();
       echo"Veio direto de " . $this->getNacionalidade();
       echo",Tem " . $this->getIdade() . " anos e pesa " . $this->getPeso() . " Kg.";
       echo"<br>Ele tem " . $this->getVitorias() . " vitorias, ";
       echo $this->getDerrotas() . " derrotas e " . $this->getEmpates() . " empates.</p>";
   }
   
   function status(){
        echo"<p>---------------------------------</p>";
        echo"<p>" . $this->getNome() . " é um peso " . $this->getCategoria();
        echo " e ja ganhou " . $this->getVitorias() . " vezes,";
        echo " perdeu " . $this->getDerrotas() . " vezes e ";
        echo " empatou " . $this->getEmpates() . " vezes</p>";
   }

   function ganharluta(){
       $this->setVitorias($this->getVitorias() + 1);
   }
   
   function perdeluta(){
       $this->setDerrotas($this->getDerrotas() + 1);
   }
   
   function empatarluta(){
       $this->setEmpates($this->getEmpates() + 1);
   }
   
   //Metodos Especiais
   function __construct($no, $na, $id, $al, $pe, $vi, $de, $em) {
       $this->nome = $no;
       $this->nacionalidade = $na;
       $this->idade = $id;
       $this->altura = $al;
       $this->setpeso($pe);
       $this->vitorias = $vi;
       $this->derrotas = $de;
       $this->empates = $em;
   }

    function getNome() {
       return $this->nome;
   }

    function getNacionalidade() {
       return $this->nacionalidade;
   }

    function getIdade() {
       return $this->idade;
   }

    function getAltura() {
       return $this->altura;
   }

    function getPeso() {
       return $this->peso;
   }

    function getCategoria() {
       return $this->categoria;
   }

    function getVitorias() {
       return $this->vitorias;
   }

    function getDerrotas() {
       return $this->derrotas;
   }

    function getEmpates() {
       return $this->empates;
   }

    function setNome($nome): void {
       $this->nome = $nome;
   }

   function setNacionalidade($nacionalidade): void {
       $this->nacionalidade = $nacionalidade;
   }

   function setIdade($idade): void {
       $this->idade = $idade;
   }

   function setAltura($altura): void {
       $this->altura = $altura;
   }

   function setPeso($peso): void {
       $this->peso = $peso;
       $this->setCategoria();
   }

   private function setCategoria(): void {
      if($this->peso < 52.2){
          $this->categoria = "Invalido";
      }elseif($this->peso <= 70.3){
          $this->categoria = "Leve";
      }elseif($this->peso <= 83.9){
          $this->categoria = "Medio";
      }elseif($this->peso <= 120.2){
          $this->categoria = "Pesado";
      }else{
          $this->categoria = "Invalido";
      }
   }

    function setVitorias($vitorias): void {
       $this->vitorias = $vitorias;
   }

    function setDerrotas($derrotas): void {
       $this->derrotas = $derrotas;
   }

    function setEmpates($empates): void {
       $this->empates = $empates;
   }



}
