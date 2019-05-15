<?php
// Realizamos a importação do arquivo de configuração.
require_once __DIR__.'/bootstrap.php';

$products = array(
    array(
        'code'          => 1,
        'name'          => 'A sutil arte de ligar o F*da-se',
        'category'   => 'Auto ajuda',
        'value'         => 32.00,
        'date_register' => '2019-05-15',
    ),
    array(
        'code'          => 2,
        'name'          => 'Ponto de Inflexão',
        'category'      => 'Biografia',
        'value'         => 29.00,
        'date_register' => '2019-05-15',
    ),
    array(
        'code'          => 3,
        'name'          => 'Pega a visão',
        'category'      => 'Auto ajuda',
        'value'         => 25.00,
        'date_register' => '2019-05-03',
    ),
);
 
// Chamamos nosso objeto de view.
echo $twig->render('index.html', array( 'content' => 'Hello World!' ) );

// Chamamos nosso objeto de view.
echo $twig->render('products.html', array( 'products' => $products ) );