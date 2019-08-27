<?php
    $d=$_POST["m"];
    switch($d){
        case 1:"Janeiro";
            echo"Seja bem vindo janeiro!";
                break;
            case 2:"Fevereiro";
                echo"Seja bem vindo fevereiro!";
                   break;
                case 3:"Março";
                    echo"Seja bem vindo março!";
                        break;
                    case 4:"Abril";
                        echo"Seja bem vindo abril!";
                            break;
                        case 5:"Maio";
                            echo"Seja bem vindo maio!";
                                break;
                            case 6:"Junho";
                                echo"Seja bem vindo junho!";
                                    break;
                                case 7:"Julho";
                                    echo"Seja bem vindo julho!";
                                        break;
                                    case 8:"Agosto";
                                        echo"Seja bem vindo agosto!";
                                            break;
                                        case 9:"Setembro";
                                            echo"Seja bem vindo a setembro!";
                                                break;
                                            case 10:"Outubro";
                                                echo"Seja bem vindo a outubro!";
                                                    break;
                                                case 11:"Novembro";
                                                    echo"Seja bem vindo a novembro!";
                                                        break;
                                                    case 12:"Dezembro";
                                                        echo"Seja bem vindo a dezembro!";
                                                            break;
        default:
            echo"Mês invalido!";
    }
    
    $ano=$_POST["ano"]*365;
    $cart= 20;
    $cig=$_POST["cigarro"];
    
    
?>
