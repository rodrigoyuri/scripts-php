<?php

function seculoAno($ano)
{
  $seculo = 1;
  $array_ano  = array_map('intval', str_split($ano));
  $seculo = (int)sprintf( "%d%d", $array_ano[0], $array_ano[1]);

  if($array_ano[2] > 0 || $array_ano[3] > 0) 
  {
    echo sprintf("Ano %d = século %d \n", $ano, ($seculo + 1));
    return;
  }
  echo sprintf("Ano %d = século %d \n", $ano, $seculo);
}

seculoAno($argv[1]);