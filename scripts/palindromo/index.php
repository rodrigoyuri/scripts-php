<?php

function seculoAno(string $palavra)
{
  $palavra = str_split(strtolower($palavra));
  if($palavra === array_reverse($palavra))
  {
    echo "true\n";
    return;
  }
  echo "false\n";
}

seculoAno($argv[1]);