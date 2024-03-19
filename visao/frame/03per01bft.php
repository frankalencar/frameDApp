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
    <div class="row">
        <div class="col col-md-12">
            <div class="jumbotron">
                <h1 class="display-4">A DApp necessita que a rede implemente o algoritmo BFT?</h1>
                <hr class="my-4">
                <div class="row mt-5">
                    <div class="col col-md-10">
                        <button onclick="location.href = '/frameworkDApp/visao/frame/04per02rede.php';" type="button" class="btn btn-dark">Sim</button>
                        <button onclick="location.href = '/frameworkDApp/visao/frame/04per02rede.php';" type="button" class="btn btn-dark">Não</button>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#ExemploModalCentralizado">O que é BFT?</button>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
    <div class="row">
         <div class="col col-md-4"></div>
        <div class="col col-md-4">
            <img src="/frameworkDApp/recursos/imagens/per01.png" class="img-fluid" alt="...">
        </div>
        <div class="col col-md-4"></div>
    </div>
    <div class="row">
        <div class="col col-md-12">
            <button onclick="location.href = '/frameworkDApp/visao/frame/02plataformas.php';" type="button" class="btn btn-primary">Voltar</button>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="TituloModalCentralizado">O que é BFT?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="lead">Tolerância a Falhas Bizantinas (BFT) é a forma como um sistema distribuído funciona mesmo quando alguns nós estão
                    quebrados ou tentam prejudicar outros.</p>
                <p class="lead">Um componente crítico das redes descentralizadas é o consenso, através do qual um grupo de pessoas ou nós da rede chega a um
                    acordo sobre uma determinada decisão ou transação. Mas como pode uma rede de computadores permanecer funcional se alguns dos
                    seus nós estão funcionando mal, não conseguem chegar a acordo sobre o estado do sistema ou comportam-se de forma maliciosa?</p>
                <p class="lead">O algoritmo BFT ajuda a resolver este problema, fornecendo um mecanismo mais robusto e seguro para alcançar consenso em uma rede
                    descentralizada, apesar da presença de nós maliciosos ou falhas.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
</body>

</html>