<?php

function seculoAno(string $palavra)
{
  $palavra = str_split(strtolower($palavra));
  if($palavra === array_reverse($palavra))
  {
    $palavra = implode('', $palavra);
    echo "String '$palavra' = true\n";
    return;
  }
  $palavra = implode('', $palavra);
  echo "String '$palavra' = false\n";
}

seculoAno($argv[1]);