<?php


$a = 10;

$b = 10;

$c = 4;

if ($a == $b):
    echo "eh igual";
else:
    echo "não eh igual";
endif;

echo "<hr>";

if ($a == "10"):
    echo "eh igual";
else:
    echo "não eh igual";
endif;

echo "<hr>";

if ($a != $b):
    echo "eh diferente";
else:
    echo "não eh diferente";
endif;

echo "<hr>";

if ($a === $b):
    echo "eh diferente";
else:
    echo "não eh diferente";
endif;

echo "<hr>";

if ($a === '10'):
    echo "eh igual";
else:
    echo "não eh igual";
endif;

echo "<hr>";

if ($a !== '10'):
    echo "eh diferente";
else:
    echo "não eh diferente";
endif;

echo "<hr>";

if (11 <> 10): // diferente
    echo "eh diferente";
else:
    echo "não eh diferente";
endif;

echo "<hr>";

if (11 > 10): 
    echo "eh maior";
else:
    echo "não eh maior";
endif;

echo "<hr>";

if (11 < 10): 
    echo "eh menor";
else:
    echo "não eh menor";
endif;

echo "<hr>";

if (11 >= 10): 
    echo "eh maior ou igual";
else:
    echo "não eh maior ou igual";
endif;

echo "<hr>";

if (11 <= 10):
    echo "eh menor ou igual";
else:
    echo "não eh menor ou igual";
endif;

echo "<hr>";

var_dump(11 <=> 10); // se os dois lados forem iguais retorna 0, se o esquerdo for menor -1, se o direito for menor 1
