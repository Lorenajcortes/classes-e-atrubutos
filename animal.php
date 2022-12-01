<?php
class animal 
{
    public $cachorro = "peludo";
    public $gato = "preto";
    public $tigre = "feroz";
    public $onca = "brava";
    public $macaco = "brincalhao";

    public function especies()
{
 echo "cachorro:{$this->cachorro}<BR>";
 echo "gato:{$this->gato}<BR>";
 echo "tigre:{$this->tigre}<BR>";
 echo "onca:{$this->onca}<BR>";
 echo "macaco:{$this->macaco}<BR>";

}
}

$animal1 =new animal();
$animal1->especies();

$animal2 =new animal;
$animal2 -> cachorro="peludo";
$animal2 -> gato="preto";
$animal2 -> tigre="feroz";
$animal2 -> onca="brava";
$animal2 -> macaco="brincalhao";
$animal2 -> especies();