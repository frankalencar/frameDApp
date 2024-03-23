<html>

<head>
    <link rel="stylesheet" href="/frameworkDApp/recursos/bootstrap-4.1/css/bootstrap.min.css">
    <script src="/frameworkDApp/recursos/jquery/jquery-3.3.1.slim.min.js"> </script>
    <script src="/frameworkDApp/recursos/bootstrap-4.1/js/popper.min.js"> </script>
    <script src="/frameworkDApp/recursos/bootstrap-4.1/js/bootstrap.min.js"> </script>
</head>
</body>
<form action="SalvaNoArquivo.php" method="POST">
    <div class="container">

        <?php include("menu.php") ?>

        <div class="row">
            <div class="col col-md-12">
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">

                        <h1 class="display-5"><strong>Qual o seu grau de satisfação com relação ao uso do framework?</strong></h1>
                        <p class="lead"><strong>As respostas podem ser 1, 2, 3, 4 ou 5.</strong></p>
                        <p class="lead"><strong>1 significa que está muito insatisfeito com o quesito.</strong></p>
                        <p class="lead"><strong>5 significa que está muito satisfeito com o quesito.</strong></p>   
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-7">
            <div class="col col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Perguntas</th>
                            <th scope="col">Muito </br> Insatisfeito</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col">Muito </br> Satisfeito</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1" scope="row">1</th>
                            <td class="col-xs-6 col-sm-6 col-md-6 col-lg-6">Quantidade de informações</td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta1" id="pergunta11" value="1">
                                    <label class="form-check-label" for="pergunta11">1</label>
                                </div>
                            </td>
                            <td class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta1" id="pergunta12" value="2">
                                    <label class="form-check-label" for="pergunta12">2</label>
                                </div>
                            </td>
                            <td class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta1" id="pergunta13" value="3">
                                    <label class="form-check-label" for="pergunta13">3</label>
                                </div>
                            </td>
                            <td class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta1" id="pergunta14" value="4">
                                    <label class="form-check-label" for="pergunta14">4</label>
                                </div>
                            </td>
                            <td class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta1" id="pergunta15" value="5">
                                    <label class="form-check-label" for="pergunta15">5</label>
                                </div>
                            </td>
                        </tr>
                        <!----------------------------------------------------------------------------------------------- -->
                        <tr>
                            <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1" scope="row">2</th>
                            <td class="col-xs-6 col-sm-6 col-md-6 col-lg-6">Explicação dos conceitos</td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta2" id="pergunta21" value="1">
                                    <label class="form-check-label" for="pergunta21">1</label>
                                </div>
                            </td>
                            <td class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta2" id="pergunta22" value="2">
                                    <label class="form-check-label" for="pergunta22">2</label>
                                </div>
                            </td>
                            <td class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta2" id="pergunta23" value="3">
                                    <label class="form-check-label" for="pergunta23">3</label>
                                </div>
                            </td>
                            <td class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta2" id="pergunta24" value="4">
                                    <label class="form-check-label" for="pergunta24">4</label>
                                </div>
                            </td>
                            <td class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta2" id="pergunta25" value="5">
                                    <label class="form-check-label" for="pergunta25">5</label>
                                </div>
                            </td>
                        </tr>
                        <!----------------------------------------------------------------------------------------------- -->
                        <!----------------------------------------------------------------------------------------------- -->
                        <tr>
                            <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1" scope="row">3</th>
                            <td class="col-xs-6 col-sm-6 col-md-6 col-lg-6">Facilidade de compreensão dos passos</td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta3" id="pergunta31" value="1">
                                    <label class="form-check-label" for="pergunta31">1</label>
                                </div>
                            </td>
                            <td class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta3" id="pergunta32" value="2">
                                    <label class="form-check-label" for="pergunta32">2</label>
                                </div>
                            </td>
                            <td class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta3" id="pergunta33" value="3">
                                    <label class="form-check-label" for="pergunta33">3</label>
                                </div>
                            </td>
                            <td class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta3" id="pergunta34" value="4">
                                    <label class="form-check-label" for="pergunta34">4</label>
                                </div>
                            </td>
                            <td class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta3" id="pergunta35" value="5">
                                    <label class="form-check-label" for="pergunta35">5</label>
                                </div>
                            </td>
                        </tr>
                        <!----------------------------------------------------------------------------------------------- -->
                        <!----------------------------------------------------------------------------------------------- -->
                        <tr>
                            <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1" scope="row">4</th>
                            <td class="col-xs-6 col-sm-6 col-md-6 col-lg-6">Possibilidade de obtenção do produto</td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta4" id="pergunta41" value="1">
                                    <label class="form-check-label" for="pergunta41">1</label>
                                </div>
                            </td>
                            <td class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta4" id="pergunta42" value="2">
                                    <label class="form-check-label" for="pergunta42">2</label>
                                </div>
                            </td>
                            <td class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta4" id="pergunta43" value="3">
                                    <label class="form-check-label" for="pergunta43">3</label>
                                </div>
                            </td>
                            <td class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta4" id="pergunta44" value="4">
                                    <label class="form-check-label" for="pergunta44">4</label>
                                </div>
                            </td>
                            <td class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta4" id="pergunta45" value="5">
                                    <label class="form-check-label" for="pergunta45">5</label>
                                </div>
                            </td>
                        </tr>
                        <!----------------------------------------------------------------------------------------------- -->
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col col-md-12">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </div>
</form>
</body>

</html>