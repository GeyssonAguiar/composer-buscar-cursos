<?php 

require 'vendor/autoload.php';
Teste::metodo();
Teste2::metodo();
exibeMensagem('aaa');
exit();

use Alura\BuscadorDeCursos\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(['verify' => false]);
$crawler = new Crawler();

$buscador = new Buscador($client, $crawler);
$cursos = $buscador->buscar('https://www.alura.com.br/cursos-online-programacao/php');

foreach ($cursos as $curso) {
    echo $curso . '<br>';
}