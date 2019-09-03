<?php
// Comando while (enquanto)

$c=1;

while($c <= 10){
    echo "$c <br>";
    $c++;
}

echo"<br>";
echo"<hr width=50% size=4 color=#000>";

$c=10;

while($c >=1){
    echo"$c <br>";
    $c--;
    
}

// Estrutura de repetição - do while

echo"<br>";
echo"<hr width=50% size=4 color=#F0F>";

$c=1;

do{
    echo"$c <br>";
    $c++;
} while($c < 5);

echo"<hr width=50% size=4 color=#F0F>";

for($i=1;$i<=10;$i++){
    echo"$i ";
}

echo"<br>";
echo"<hr>";

//Array - O array pode ser declarado de 3 maneiras diferentes
//Definição mais simples

$amigos=array("Jojoba","Fabio","Victor","Marcelo");
print_r($amigos); 

echo"<br>";
echo"<hr width=70% color=pink>";

echo $amigos[0];

echo"<hr width=80% color=                                                                                                                                                                    >";

$amigosforever=array("Jojoba","Fabio","Victor","Marcelo");
$amigosforever[] = "Yuri";
print_r($amigosforever);

echo"<br>";
echo"<hr color=blue width=20%>";

//Criando um array atraves de indices

$disciplina = array();
$disciplina[0] = "Prog Web 2";
$disciplina[1] = "BD2";
$disciplina[2] = "Estrutura de Dados";
$disciplina[3] = "SO";
print_r($disciplina);

echo"<hr color=grey size=10% width=90%>";
echo"<br>";

//Array com indices textuais 

$carro=array();
$carro["cor"]="Preto";
$carro["modelo"]="Kombi";
$carro["ano"]="1994";
$carro["fabricante"]="Toyota";
print_r($carro);

echo"<br> A cor do carro é ".$carro["cor"];
echo"<br> Modelo do carro é ".$carro["modelo"];
echo"<br> O ano do carro é ".$carro["ano"];
echo"<br> O fabricante é ".$carro["fabricante"];

echo"<hr width:40% color=red size=4>";

//Maneira simples

$carro=array("cor" => "branco","modelo" => "Fusca", "ano" => "1997", "fabricante" => "Ferrari");
echo"<br> A cor é ".$carro["cor"];
echo"<br> Modelo do carro é ".$carro["modelo"];
echo"<br> O ano do carro é ".$carro["ano"];
echo"<br> O fabricante é ".$carro["fabricante"];

echo"<hr>";

//Array com multiplos valores

$carro=array();
$carro["cor"]=array("Preto","Azul","Prata","Laranja","Pink");
$carro["modelo"]="Kombi";
$carro["ano"]=1994;
$carro["fabricante"]="Toyota";
print_r($carro);
echo"<br> A segunda cor do carro é ".$carro["cor"][1];


?>

