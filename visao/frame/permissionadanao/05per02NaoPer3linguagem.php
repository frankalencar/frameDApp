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
                <h1 class="display-4">Linguagem consolidada?</h1>
                <hr class="my-4">
                <div class="row mt-5">
                    <div class="col col-md-8">
                        <button onclick="location.href = '/frameworkDApp/visao/frame/permissionadanao/06per2simper3per4.php?figura=sim';" type="button" class="btn btn-dark">Sim</button>
                        <button onclick="location.href = '/frameworkDApp/visao/frame/permissionadanao/06per2simper3per4.php?figura=nao';" type="button" class="btn btn-dark">Não</button>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#ExemploModalCentralizado">O que é linguagem consolidada?</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
         <div class="col col-md-3"></div>
        <div class="col col-md-6">
        <img src="/frameworkDApp/recursos/imagens/per02naoper03.png" class="img-fluid" alt="...">
        </div>
        <div class="col col-md-3"></div>
    </div>
    <div class="row">
        <div class="col col-md-12">
            <button onclick="location.href = '/frameworkDApp/visao/frame/04per02rede.php';" type="button" class="btn btn-primary">Voltar</button>
        </div>
    </div>
</div>

<!-- Modal explicação-->
<div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="TituloModalCentralizado">O que é linguagem consolidada?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="lead">A utilização de uma linguagem já consolidada no mercado é atraente, principalmente por atenuar a curva de aprendizado
                    necessária para iniciar o desenvolvimento de DApps. Outro aspecto reside no amadurecimento da linguagem, que se traduz em uma
                    menor incidência de atualizações de versão, mitigando, assim, a probabilidade de se realizar a refatoração do código para se 
                    alinhar às alterações eventualmente introduzidas.</p>
                <p class="lead">Exemplo: Java, Python, PHP, C, C++, C# e outros.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
</body>

</html>