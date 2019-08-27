<?php
    //Condição simples (if, else, else if)

    $a = $_POST["ano"];
    
    $idade = date("Y") - $a;
    
    echo"Você nasceu em $a e tem $idade anos";
    
    if($idade >= 18){
        $v = "já pode votar";
        $b = "já pode dirigir";
    } else{
        $v = "não pode votar";
        $b = "não pode dirigir";
    }
    
    echo"<br>Com essa idade você $v e $b.";
    
    // Para calcular o IMC
    
    $peso=$_POST["x"];
    $altura=$_POST["y"];
    
    echo"<br>O seu peso digitado é: $peso.Kg";
    $valor= $altura*$altura;
    
    echo"<br>Altura é: $altura.metros";
    
    $imc=$peso/$valor;
    
    echo"<br>O imc correspondente é:".round($imc);
    
    if($imc < 18.5){
        echo"Abaixo do Peso!";
    } else if ($imc>=18.6 && $imc<=24.9){
        echo"Peso Ideal!";
    } else if($imc>=25 && $imc<=29.9) {
        echo"Acima do Peso!";
    } else if($imc>=30 && $imc<=34.9){
        echo"Obesidade!";
    } else {
        echo"Obesidade Morbida!";
    }
    
    echo"<br>";
    
    $d=$_POST["semana"];
    switch($d){
        case 1:"Segunda";
            case 2:"Terça";
                case 3:"Quarta";
                    case 4:"Quinta";
                        case 5:"Sexta";
                            echo"Levanta e vai estudar :)";
                                break;
        case 6:"Sábado";
            case 7:"Domingo";
                echo"Vai beber!";
                    break;
        default:
            echo"Dia da semana invalido!";
    }
    
?>
