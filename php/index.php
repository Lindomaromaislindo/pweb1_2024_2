  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    <?php
    $nome = "Luciusdomarazulciano";
    $idade = 200;
    echo "Olá mundo!".$nome. "<br> Idade: ".$idade;

    if($idade <= 18) {
      echo "Menor de idade ";
    } else {
      echo "<br>Maior de idade";
    }

    $pessoas = [
      "<br>"."Roberto", "Toatra", "ErrouNoob"
      
    ];

    for($i = 0; $i < count($pessoas); $i++) {
      echo $pessoas[$i]."<br>";
    }

    $idades = [15, 16, 18];

    foreach($idades as $item) {
      if($item >= 18) {
      echo $item."<br>";
    }
  }

  $num1 = 5;
  $num2 = 6;
  $opcao = 2;
  switch ($opcao) {
    case 1:
      echo "Soma". $num1+$num2;
    break;
    case 2:
      echo "Subtração: ". $num1=$num2;
    break;
    case 3:
     echo "Multiplicação: ". $num1*$num2;
    break;
    case 3:
      echo "Divisão: ". $num1/$num2;
    break;
    default:
    echo "Opção de quando algo da errado, então deu errado";
   }
   
    ?>
  </body>
  </html>