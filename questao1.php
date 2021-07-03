<html>
  <head>
    <title>Questao 1 - Prova PHP</title>
  </head>
  <body>
    <p>Formulário de inserção de dois valores<p>
    <form action = "questao1.php" method = "get"> 
      <label>Valor 1: </label> 
      <input type="text" name="campo1"/>
      <br/><br/>
      <label>Valor 2 </label> 
      <input type="text" name="campo2"/>
      <br/><br/>
      <button>Calcular</button>
    </form>
    <?php
      function mdc($m,$n){
        $a = max($m,$n);
        $b = min($m,$n);
        if($a%$b == 0){
          return $b;
        }else{
          return mdc($b,($a%$b));
        }
      }

      function mmc($m,$n){
        return (($m*$n)/(mdc($m,$n)));
      }

      $valor1 = $_GET['campo1'];
      $valor2 = $_GET['campo2'];
      
      if(!empty($valor1) && !empty($valor2)){
        echo "MDC de $valor1 e $valor2 tem o resultado de: ";
        echo mdc($valor1, $valor2);
        echo "<br/> MMC de $valor1 e $valor2 tem o resultado de: ";
        echo mmc($valor1, $valor2);
      } 
    ?>  
    
  </body>
</html>