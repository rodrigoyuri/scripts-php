<?php

function seculoAno(string $palavra)
{
  $palavra = str_split(strtolower($palavra));
  if($palavra === array_reverse($palavra))
  {
    echo "Sim\n";
    return;
  }
  echo "Não\n";
}

seculoAno($argv[1]);