<?php
session_start();
session_unset(); // limpa a sessão
session_destroy(); // destroi a sessão


echo "<h1>dados da sessão destruidos</h1>";