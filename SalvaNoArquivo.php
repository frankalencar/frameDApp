<html>

<head>
    <link rel="stylesheet" href="/frameworkDApp/recursos/bootstrap-4.1/css/bootstrap.min.css">
    <script src="/frameworkDApp/recursos/jquery/jquery-3.3.1.slim.min.js"> </script>
    <script src="/frameworkDApp/recursos/bootstrap-4.1/js/popper.min.js"> </script>
    <script src="/frameworkDApp/recursos/bootstrap-4.1/js/bootstrap.min.js"> </script>
</head>
</body>
<form action="" method="POST">
    <div class="container">

        <?php include("menu.php") ?>

        <div class="row mt-7">
            <div class="col col-md-12">
                <?php
                $resposta1 = "pergunta 1 : R " . $_POST['pergunta1'] . " - ";
                $resposta2 = "pergunta 2 : R " . $_POST['pergunta2'] . " - ";
                $resposta3 = "pergunta 3 : R " . $_POST['pergunta3'] . " - ";
                $resposta4 = "pergunta 4 : R " . $_POST['pergunta4'];

                //criamos o arquivo $arquivo
                $arquivo = fopen('meuarquivo.txt', 'a');
                //verificamos se foi criado
                if ($arquivo == false)
                    die('Não foi possível criar o arquivo.');
                else {
                    //escrevemos no arquivo 
                    $texto = $resposta1 . $resposta2 . $resposta3 . $resposta4 . "\r\n";
                    fwrite($arquivo, $texto);
                    //Fechamos o arquivo após escrever nele 
                    fclose($arquivo);
                    echo "<div class=\"jumbotron jumbotron-fluid\">
                    <div class=\"container\">
                        <h1 class=\"display-4\"><strong>Respostas salvas com sucesso!</strong></h1>
                        <p class=\"lead\"><strong>Muito obrigado pela participação.</strong></p>
                    </div>
                    </div>";
                }
                ?>
            </div>
        </div>
    </div>
</form>
</body>

</html>