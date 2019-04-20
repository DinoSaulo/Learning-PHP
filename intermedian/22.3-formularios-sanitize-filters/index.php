<html>
<body>
    
    <?php
        if(isset($_POST['enviar-formulario'])):
            echo "Enviou <br>";
            $errors = array();

            // sanitize - para filtrar os dados provindos de input
            $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
            echo $nome."<br>";
            // <button> clicar </button> Saulo -> Saulo

            $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
            // q12 -> 12
            if(!filter_var($idade, FILTER_VALIDATE_INT)):
                $errors[] = "Idade precisa ser um inteiro"
            endif;
            echo $idade."<br>";

            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            // sab2()@ci     n.ufpe.br -> sab2@cin.ufpe.br
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
                $errors[] = "E-mail inválido"
            endif;
            echo $email."<br>";

            $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
            
            if(!filter_var($url, FILTER_VALIDATE_URL)):
                $errors[] = "URL inválida"
            endif;
            echo $url."<br>";

            if(!empty($errors)):
                foreach($errors as $erro):
                    echo "<li> $erro </li>";
                endforeach;
            else:
                echo "Parabéns, seus dados estão corretos!";
            endif;
        endif;
    ?>


    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        Nome: <input type="text" name="nome"><br>
        Idade: <input type="text" name="idade"><br>
        E-mail: <input type="email" name="email"><br>
        URL: <input type="text" name="url"><br>
        <button type='submit' name="enviar-formulario">Enviar</button>
    </form>

</body>
</html>