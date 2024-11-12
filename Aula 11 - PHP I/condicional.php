<?php
  $idade = 18;
  
  //Exemplo com if
  if($idade>=18){
    echo 'Maior de idade';
  }
  echo '<br>';
  $idade = 17;
  //Exemplo com if else
    if($idade>=18){
        echo 'Maior de idade';  
    }else{      
        echo 'Menor de idade';
    }
    echo '<br>';
    // Exemplo com if else if
    $idade =12;
    if($idade>=18){
        echo 'Adulto';
    }else if ($idade>=12 && $idade<18){
        echo 'Adolescente';
    }else{
        echo 'Criança';
    }
    echo '<br>';
    // Exemplo com switch
    $dia = 7;

    switch($dia){
        case 1:
            echo 'Domingo';
            break;
        case 2:
            echo 'Segunda';
            break;
        case 3:
            echo 'Terça';
            break;
        case 4:
            echo 'Quarta';
            break;
        case 5:
            echo 'Quinta';
            break;
        case 6:
            echo 'Sexta';
            break;
        case 7:
            echo 'Sábado';
            break;
        default:
            echo 'Dia inválido';
                
    }
    echo '<br>';
    // Exemplo com operador ternário
    $res = ($idade>=18) ? 'Maior idade': 'Menor idade';
    echo $res;



?>