<?php

use PHP_CodeSniffer\Autoload;

require 'vendor/autoload.php';
// Autoload via classmap:
DataEHora::metodo();

// Autoload via files:
// Todas as funções do arquivo 'functions.php' são incluidos nesse(No nosso caso, estamos usado ele para usar a função exibeMensagem())!

// Autoload via PSR-4:
use AluraNomeOrganizacao\BuscadorDeCursosNomeProduto\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;


$client = new Client(['base_uri' => 'https://www.alura.com.br/']);
$crawler = new Crawler();

$buscador = new Buscador($client, $crawler);
$cursos = $buscador->buscar('cursos-online-programacao/php') ;

foreach($cursos as $curso){
    echo exibeMensagem($curso);
}



// ------------------------------------------------------------
// Simples sem POO:
// use GuzzleHttp\Client;
// use Symfony\Component\DomCrawler\Crawler;

// $client = new Client();
// $resposta = $client->request('GET', 'https://www.alura.com.br/cursos-online-programacao/php');

// $html = $resposta->getBody();

// $crawler = new Crawler();
// $crawler->addHtmlContent($html);

// $cursos = $crawler->filter('span.card-curso__nome');

// foreach($cursos as $curso){
//     echo $curso->textContent . PHP_EOL;
// }
// ------------------------------------------------------------
