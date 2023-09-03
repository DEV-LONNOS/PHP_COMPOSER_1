<?php 
    include_once __DIR__."/../vendor/autoload.php";

    use App\model\Pessoa;

    $p = new Pessoa("Luizinho");
    echo $p->nome;



    echo"<h1>Luis Fellipe</h1>";

