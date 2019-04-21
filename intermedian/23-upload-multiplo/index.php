<html>
<body>
    
    <?php
        if(isset($_POST['enviar-formulario'])):
            
            
            var_dump($_FILES);
        endif;
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"
        enctype="multipart/form-data">
        <input type="file" name="arquivo[]" multiple><br>
        <input type="submit" name="enviar-formulario">

    </form>

</body>


</html>