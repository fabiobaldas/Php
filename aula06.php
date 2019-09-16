<?php
/* 
    4ª Função - Trim (para recortar os espaços do inicio e do final, o espaço do meio é preservado
 */

$nome="        Fabio dos Santos Baldas Filho";
echo"<br>A quantidade de caracteres é: ".(strlen($nome));
$novo = trim($nome);
echo"<br>".($nome);
echo"<br>A quantidade de caracteres é: ".(strlen($novo));

/*
    5ª Função - ltrim (para recortar os espaços da esquerda, o espaço do meio é preservado
 */

$nome = "     Paula de Araujo Baldas";
echo"<br>A quantidade de caracteres é: ".(strlen($nome));
$novo = ltrim($nome);
echo"<br>".($novo);
echo"<br>A quantidade de carcateres é: ".(strlen($novo));

/*
    6ª Função - rtrim (para recortar os espaços da direita, o espaço do meio é preservado)
 */

$nome = "Jecie de Araujo Gonçalves      ";
echo"<br>A quantidade de caracteres é: ".(strlen($nome));
$novo = rtrim($nome);
echo"<br>".($novo);
echo"<br>A quantidade de caracteres é: ".(strlen($nome));

/*
    7ª Função - str_word_count (traz a quantidade de palavras que esta dentro da string
 */

$frase="Eu estou com vontade de ter aula de PHP hoje";
$count = str_word_count($frase,0); // Essa função 0 conta as palavras

echo"<br>Têm $count palavras na $frase <br>";

$count = str_word_count($frase,1); // Essa função 1 traz a posição de cada palavra
print_r($count);

echo"<br>";

$count=str_word_count($frase,2); // Essa função 2 traz a posição onde a palavra começa dentro de um array
print_r($count);

echo"<br>";

/*
   8º Função - chr identifica o caractere digitado
 */

$letra = chr(67);
$letral = chr(99);
echo"<br> A letra do codigo 67 é: $letra"; //C maiusculo
echo"<br> A letra do codigo 99 é: $letral <br>"; //c minusculo

/*
  9ª Função - ord para mostrar o codigo da tecla 
 */

$letra2 = "C";
$cod = ord($letra2);
$letra3 = "c";
$cod1 = ord($letra3);

echo"<br>O codigo da letra C é $cod";
echo"<br>O codigo da letra c é $cod1";

/*
   10ª Função - strtolower (para colocar a string em minusculo)
 */
echo"<br>";

$nome5="TherEza GoNdIm";
$nome15=strtolower($nome5);
echo"<br> O nome da minha professora é: $nome15";

// Outra maneira

$nome10 = "TherEza GoNdIm";
echo"<br>Professora, ".strtolower($nome10);
echo"<br>";

//Caixa Alta

$nome5="TherEza GoNdIm";
$nome15=strtoupper($nome5);
echo"<br> O nome da minha professora é: $nome15";

echo"<br>Professora, ".strtoupper($nome15);
echo"<br>";

/*
    12ª Função - ucfirst (para colocar a primeira letras em maiuscula)
 */

$nome69 = "thereza gondim";
echo"<br>Meu nome é ".ucfirst($nome69);

/*
   13ª Função - ucwords (para alterar as primeiras letras para maiscula)
 */

$nome99 = "thereza prado gondinho";
echo"<br>Meu nome é ".ucwords($nome99);

/*
  14ª Função - strrev (para colocar de tras para frente
 */

$nome89 = "fabio dos santos baldas filho";
echo"<br>Meu nome ao contrario é ".strrev($nome89);

/*
 15ª Função - strpos (para mostrar a posição que uma determinada palavra se encontra
 */

echo"<br>"; 

$teste = "PHP até que é legalzinho";
$pos = strpos($teste, "PHP");
echo"<br>A frase é: $teste";
echo"<br>Se encontra na posição $pos";

/*
 16ª Função - stripos (Tras a busca independente da escrita estar igual a frase)
 */

$pos = stripos($teste,"php");
echo"<br>A string foi encontrada na posição $pos";
?>
