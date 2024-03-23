<html>

<head>
    <link rel="stylesheet" href="/frameworkDApp/recursos/bootstrap-4.1/css/bootstrap.min.css">
    <script src="/frameworkDApp/recursos/jquery/jquery-3.3.1.slim.min.js"> </script>
    <script src="/frameworkDApp/recursos/bootstrap-4.1/js/popper.min.js"> </script>
    <script src="/frameworkDApp/recursos/bootstrap-4.1/js/bootstrap.min.js"> </script>
</head>
</body>
<div class="container">
    <?php include("../../../menu.php") ?>
    <div class="row">
        <div class="col col-md-12">
            <div class="jumbotron">
                <h1 class="display-4">Plataforma(s) sugerida(s)</h1>
                <hr class="my-4">
                <div class="row mt-5">
                    <div class="col col-md-12">
                        <ul>
                            <?php
                            if ($_GET['figura'] == 'sim') {
                                echo '<a target="_blank" href="https://ethereum.org/pt/" class="btn btn-link">';
                                echo '<li><span class="glyphicon glyphicon-th-list"></span> Ethereum</li> </a></br>';

                                echo '<a target="_blank" href="https://rootstock.io/" class="btn btn-link">';
                                echo '<li><span class="glyphicon glyphicon-th-list"></span> RSK</li> </a></br>';

                                echo '<a target="_blank" href="https://neo.org/" class="btn btn-link">';
                                echo '<li><span class="glyphicon glyphicon-th-list"></span> Neo</li> </a></br>';

                                echo '<a target="_blank" href="https://eosnetwork.com/" class="btn btn-link">';
                                echo '<li><span class="glyphicon glyphicon-th-list"></span> EOS</li> </a>';
                            } else if ($_GET['figura'] == 'nao'){
                                echo '<a target="_blank" href="https://ethereum.org/pt/" class="btn btn-link">';
                                echo '<li><span class="glyphicon glyphicon-th-list"></span> Ethereum</li> </a></br>';

                                echo '<a target="_blank" href="https://rootstock.io/" class="btn btn-link">';
                                echo '<li><span class="glyphicon glyphicon-th-list"></span> RSK</li> </a></br>';
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
         <div class="col col-md-2"></div>
        <div class="col col-md-8">
        <?php
                echo '<img src="/frameworkDApp/recursos/imagens/per02naoper03' . $_GET['figura'] . 'per4' . $_GET['figura2'] . '.png" class="img-fluid" alt="...">';
            ?>
        </div>
        <div class="col col-md-2"></div>
    </div>
    <div class="row">
        <div class="col col-md-12">
            <button onclick="location.href = '/frameworkDApp/visao/frame/permissionadanao/06per2simper3per4.php?figura=<?php echo $_GET['figura'] ?>&figura2=<?php echo $_GET['figura2'] ?>';" type="button" class="btn btn-primary">Voltar</button>
        </div>
    </div>
</div>

<!-- Modal explicação-->
<div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="TituloModalCentralizado">Necessita de Token?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="lead">Segundo Chen (2018) a tecnologia Blockchain impulsionou o empreendedorismo e a inovação ao viabilizar a representação
                    de ativos escassos, por meio de Tokens, proporcionando assim a participação de novas pessoas e a captação de recursos.</p>
                <p class="lead">O Token não se limita à representação de moedas, abarcando, de maneira mais ampla, uma variedade de ativos, tais
                    como títulos, propriedades e pontos de fidelidade, entre outros. E podem ser transferidos entre as partes envolvidas na transação
                    sem a interferência de um órgão centralizados (Chen, 2018).</p>
                <p class="lead">Segundo (Xu et al., 2019), ao contrário de uma moeda digital, é importante observar que o Token não é nativo da
                    Blockchain. Ele opera como uma evidência criptografada de direitos digitais, sendo capaz de representar uma diversidade de ativos,
                    como identidade, diplomas acadêmicos, ingressos para eventos e chaves. Esta versatilidade demonstra o poder intrínseco do token ao
                    capacitar a digitalização de uma ampla gama de direitos existentes na sociedade Xu et al. (2019).</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
</body>

</html>