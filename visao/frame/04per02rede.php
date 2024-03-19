<html>

<head>
    <link rel="stylesheet" href="/frameworkDApp/recursos/bootstrap-4.1/css/bootstrap.min.css">
    <script src="/frameworkDApp/recursos/jquery/jquery-3.3.1.slim.min.js"> </script>
    <script src="/frameworkDApp/recursos/bootstrap-4.1/js/popper.min.js"> </script>
    <script src="/frameworkDApp/recursos/bootstrap-4.1/js/bootstrap.min.js"> </script>
    <script type="text/javascript">
        $(window).on('load',function(){
        $('#explicacaoAoCarregar').modal('show'); });
    </script>
</head>
</body>
<div class="container">
    <?php include("../../menu.php") ?>
    <div class="row">
        <div class="col col-md-12">
            <div class="jumbotron">
                <h1 class="display-4">Necessita de uma rede permissionada?</h1>
                <hr class="my-4">
                <div class="row mt-5">
                    <div class="col col-md-9">
                        <button onclick="location.href = '/frameworkDApp/visao/frame/05per02SimPer3linguagem.php';" type="button" class="btn btn-dark">Sim</button>
                        <button onclick="location.href = '/frameworkDApp/visao/frame/permissionadanao/05per02NaoPer3linguagem.php';" type="button" class="btn btn-dark">Não</button>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#ExemploModalCentralizado">O que é Permissionada?</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
         <div class="col col-md-4"></div>
        <div class="col col-md-4">
        <img src="/frameworkDApp/recursos/imagens/per02.png" class="img-fluid" alt="...">
        </div>
        <div class="col col-md-4"></div>
    </div>
    <div class="row">
        <div class="col col-md-12">
            <button onclick="location.href = '/frameworkDApp/visao/frame/03per01bft.php';" type="button" class="btn btn-primary">Voltar</button>
        </div>
    </div>
</div>

<!-- Modal inicial-->
<div class="modal fade" id="explicacaoAoCarregar" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="TituloModalCentralizado"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="lead">Todas as plataformas implementam o algoritmo de Tolerância a Falhas Bizantinas.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal explicação-->
<div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="TituloModalCentralizado">O que é rede permissionada?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="lead">Yang et al. (2020) define em sua pesquisa que uma Blockchain privada tem uma alta taxa de processamento e 
                    consequentemente o número de transações finalizadas por ela é maior que em redes públicas. As redes privadas exigem 
                    que os nós que a integram estejam autenticados na rede para poderem utilizar o sistema, facilitando o consenso na rede.</p>
                <p class="lead">Em uma Blockchain pública existe um número maior de nós e cada conjunto de nós que realizam uma transação,
                    precisam ser averiguados antes de terem sua transação concretizada. Posteriormente o estado atual deve ser enviado para
                    todos os nós pertencentes a rede, aumentando o tempo de processamento e com isso diminuindo o número de transações efetivadas
                    em um espaço de tempo (Yakubu et al., 2023).</p>
                <p class="lead">Outra característica importante é de que em uma on-chain (rede pública) existe uma rede mais descentralizada e
                    cada transação ocorrida pode ser verificada por aqueles que compõem a rede. Em uma off-chain (rede privada) é menos 
                    descentralizada e apenas os nós de confiança da rede, podem verificar e validar as transações (Yang et al., 2020).</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
</body>

</html>