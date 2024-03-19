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
                <h1 class="display-4">Necessita de Token?</h1>
                <hr class="my-4">
                <div class="row mt-5">
                    <div class="col col-md-10">
                        <button onclick="location.href = '/frameworkDApp/visao/frame/permissionadanao/07per2simper3per4per5.php?figura=<?php echo $_GET['figura'] ?>&figura2=sim';" type="button" class="btn btn-dark">Sim</button>
                        <button onclick="location.href = '/frameworkDApp/visao/frame/permissionadanao/07per2simper3per4per5.php?figura=<?php echo $_GET['figura'] ?>&figura2=nao';" type="button" class="btn btn-dark">Não</button>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#ExemploModalCentralizado">O que é Token?</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
         <div class="col col-md-3"></div>
        <div class="col col-md-6">
        <?php
                echo '<img src="/frameworkDApp/recursos/imagens/per02naoper03' . $_GET['figura'] . '.png" class="img-fluid" alt="...">';
            ?>  
        </div>
        <div class="col col-md-3"></div>
    </div>
    <div class="row">
        <div class="col col-md-12">
            <button onclick="location.href = '/frameworkDApp/visao/frame/permissionadanao/05per02NaoPer3linguagem.php?figura=<?php echo $_GET['figura'] ?>';" type="button" class="btn btn-primary">Voltar</button>
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