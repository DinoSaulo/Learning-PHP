<?php

// carregamos o autoloader
require_once __DIR__.'/vendor/autoload.php';
 
// Criamos nossa configuração, apontando o diretório onde ficarão nossos arquivos html
$loader = new Twig_Loader_Filesystem(__DIR__.'/view');
 
// Criamos nosso objeto e passamos nossas fonfigurações.
$twig = new Twig_Environment($loader);