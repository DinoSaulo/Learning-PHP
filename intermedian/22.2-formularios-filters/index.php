<html>
<body>
    
    <?php
        if(isset($_POST['enviar-formulario'])):
            echo "Enviou <br>";
            $errors = array();
            if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)):
                $errors[] = "Idade precisa ser um inteiro";
            endif;

            if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)):
                $errors[] = "Email inválido";
            endif;

            if(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)):
                $errors[] = "Idade precisa ser um float";
            endif;

            if(!$ip = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_IP)):
                $errors[] = "IP inválido";
            endif;

            if(!$url = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_URL)):
                $errors[] = "URL inválida";
            endif;

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
        Idade: <input type="text" name="idade"><br>
        E-mail: <input type="email" name="email"><br>
        Peso: <input type="text" name="peso"><br>
        IP: <input type="text" name="IP"><br>
        URL: <input type="text" name="url"><br>
        <button type='submit' name="enviar-formulario">Enviar</button>
    </form>

</body>
</html>