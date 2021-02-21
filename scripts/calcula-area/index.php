<?php

function calculaArea(int $area)
{
  $dobroAtual = 0;
  $dobroAnterior = 0;
  $quadrados = 0;
  for($i = 1; $i<=$area; $i++)
  {
    $dobroAtual = pow($i, 2);
    $dobroAnterior = pow($i - 1, 2);
    $quadrados = $dobroAtual + $dobroAnterior;
  }
  echo "N {$area} = {$quadrados}\n";
}

calculaArea($argv[1]);