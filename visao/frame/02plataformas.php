<html>

<head>
    <link rel="stylesheet" href="/frameworkDApp/recursos/bootstrap-4.1/css/bootstrap.min.css">
    <script src="/frameworkDApp/recursos/jquery/jquery-3.3.1.slim.min.js"> </script>
    <script src="/frameworkDApp/recursos/bootstrap-4.1/js/popper.min.js"> </script>
    <script src="/frameworkDApp/recursos/bootstrap-4.1/js/bootstrap.min.js"> </script>
</head>
</body>
<div class="container">
    <?php include("../../menu.php") ?>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Aplicações de propósito geral</h1>
            <p class="lead">Serão consideradas as seguintes plataformas:</p>
            <ul>
                <li class="lead">Ethereum, Hyperledger, Neo, EOS, RSK, Tendermint e Quorum.</li>
            </ul>
            <p class="lead">As perguntas serão:</p>
            <ul>
                <li class="lead">Implementa BFT, Rede permissionada, Utiliza linguagem consolidada e Possui token próprio.</li>
            </ul>
            <button onclick="location.href = '/frameworkDApp/visao/frame/01webclassicaxdapp.php';" type="button" class="btn btn-dark">Voltar</button>
            <button onclick="location.href = '/frameworkDApp/visao/frame/03per01bft.php';" type="button" class="btn btn-dark">Avançar</button>
        </div>
    </div>
    <div class="row">
        <p class="lead">A figura abaixo demonstra o todo do framework.</p>
    </div>
    <div class="row">
        <img src="/frameworkDApp/recursos/imagens/diagramatotal.png" class="img-fluid" alt="...">
    </div>
</div>
</body>

</html>