<html>
  <head>
    <title>Questao 2 - Prova PHP</title>
  </head>
  <body>
    <p>Formulário de inserção de dois valores<p>
    <form action = "questao2.php" method = "post"> 
      <label>Valor M: </label> 
      <input type="text" name="campo1"/>
      <br/><br/>
      <label>Valor N </label> 
      <input type="text" name="campo2"/>
      <br/><br/>
      <button>Calcular</button>
    </form>
    <?php
      $m=$_POST['campo1'];
      $n=$_POST['campo2'];
      if(!empty($m) && !empty($n)){
        $listagem[] = array(); 
        for($resultado=1, $count=1 ; $count<=$n; $count++){
          $resultado *= $m;
          $listagem[$count-1] = $resultado;
        }
        echo "Resultado: <br />";
        foreach($listagem as $valor) {
            echo "$valor<br /> ";
        }
      }
    ?> 
    
  </body>
</html>