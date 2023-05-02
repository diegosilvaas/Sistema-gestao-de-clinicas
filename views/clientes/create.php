<!DOCTYPE html>

<?php
require_once '../../app/Controller/ClienteController.php';
require_once '../../app/Model/Cliente.php';
?>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template-free">
<?php include_once '../../includes/head.php'; ?>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            <?php include_once '../../includes/aside.php'; ?>

            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <?php include_once '../../includes/navbar.php'; ?>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class='container-xxl flex-grow-1 container-p-y'>
                        <div class="row">
                            <div class="card mb-4">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h5 class="mb-0">Cadastrar novo cliente</h5>
                                    <small class="text-muted float-end">Default label</small>
                                </div>
                                <div class="card-body">
                                    <form method="post">
                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Nome</label>
                                            <input name="nome" type="text" class="form-control" id="basic-default-fullname">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-phone">Data de nascimento</label>
                                            <input name="data_nascimento" type="number" id="basic-default-phone" class="form-control phone-mask" placeholder="06 02 1996">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-company">telefone</label>
                                            <input name="telefone" type="number" class="form-control" id="basic-default-company">
                                        </div>


                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-message">Queixa principal</label>
                                            <input name="queixa_principal" type="text" class="form-control" id="basic-default-company">

                                        </div>



                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-message">Já realizou alguma cirurgia?</label>
                                            <input name="realizou_cirurgia" type="text" class="form-control" id="basic-default-company">

                                        </div>



                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-message">Toma algum remédio? Qual?</label>
                                            <input name="toma_remedio" type="text" class="form-control" id="basic-default-company">

                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-message">Toma anticoncepcional?</label>
                                            <input name="toma_anticoncepcional" type="text" class="form-control" id="basic-default-company">

                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-message">Está fazendo algum tratamento médico?</label>
                                            <input name="tratamento_medico" type="text" class="form-control" id="basic-default-company">

                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-message">Tem hipo/Hipertensão arterial?</label>
                                            <input name="hipo_arterial" type="text" class="form-control" id="basic-default-company">

                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-message">Possui algum problema cardíaco?</label>
                                            <input name="cardiaco" type="text" class="form-control" id="basic-default-company">

                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-message">Possui algum disturbio hormonal?</label>
                                            <input name="disturbio_hormonal" type="text" class="form-control" id="basic-default-company">

                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-message">Possui algum disturbio circulatório?</label>
                                            <input name="disturbio_circulatorio" type="text" class="form-control" id="basic-default-company">

                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-message">Possui alguma doença de pele?</label>
                                            <input name="doenca_pele" type="text" class="form-control" id="basic-default-company">

                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-message">Ingere álcool? Com que frequência?</label>
                                            <input name="ingere_alcool" type="text" class="form-control" id="basic-default-company">

                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-message">Diabetes?</label>
                                            <input name="diabetes" type="text" class="form-control" id="basic-default-company">

                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-message">Gostaria de mencionar algum quadro de saude?</label>
                                            <input name="quadro_saude" type="text" class="form-control" id="basic-default-company">

                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-message">Está gestante?</label>
                                            <input name="gestante" type="text" class="form-control" id="basic-default-company">

                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-message">Pratica atividade fisica? Qual?</label>
                                            <input name="atividade_fisica" type="text" class="form-control" id="basic-default-company">

                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-message">Alimentação balanceada?</label>
                                            <input name="alimentacao_balanceada" type="text" class="form-control" id="basic-default-company">

                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-message">Ingestão diária de água?</label>
                                            <input name="ingestao_agua" type="text" class="form-control" id="basic-default-company">

                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-message">Funcionamento intestinal? </label>
                                            <input name="funcionamento_intestinal" type="text" class="form-control" id="basic-default-company">

                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-message">Periodo mestrual?</label>
                                            <input name="periodo_mestrual" type="text" class="form-control" id="basic-default-company">

                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-message">Possui marcapasso?</label>
                                            <input name="possui_marcapasso" type="text" class="form-control" id="basic-default-company">

                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-message">Possui varizes?</label>
                                            <input name="possui_varizes" type="text" class="form-control" id="basic-default-company">

                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-message">Usa algum cosmético corporal/facial?</label>
                                            <input name="cosmetico_corporal" type="text" class="form-control" id="basic-default-company">

                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-message">Histórico de epilepsia?</label>
                                            <input name="epilepsia" type="text" class="form-control" id="basic-default-company">

                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-message">Cicatriz?</label>
                                            <input name="cicatriz" type="text" class="form-control" id="basic-default-company">

                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-message">Já engravidou? Quantas vezes?</label>
                                            <input name="engravidou" type="text" class="form-control" id="basic-default-company">

                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-message">Possui alguma protese metálica? </label>
                                            <input name="protese_metalica" type="text" class="form-control" id="basic-default-company">

                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-message">É fumante? </label>
                                            <input name="fumante" type="text" class="form-control" id="basic-default-company">

                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-message">Já teve câncer? </label>
                                            <input name="cancer" type="text" class="form-control" id="basic-default-company">

                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-message">Utiliza lentes de contato? </label>
                                            <input name="lente_contato" type="text" class="form-control" id="basic-default-company">

                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-message">Fica exposta ao sol? </label>
                                            <input name="exposicao_sol" type="text" class="form-control" id="basic-default-company">

                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-message">Utiliza filtro solar? </label>
                                            <input name="filtro_solar" type="text" class="form-control" id="basic-default-company">

                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-message">Está no período mestrual? </label>
                                            <input name="perido_mestrual" type="text" class="form-control" id="basic-default-company">

                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-message">Costuma dormir quantas horas por noite? </label>
                                            <input name="sono" type="text" class="form-control" id="basic-default-company">

                                        </div>




                                        <div class="col-md">
                                            <h5 class="card-header">Oleosidade</h5>
                                            <div class="form-check form-check-inline mt-3">
                                                <input name="oleosidade" class="form-check-input" type="radio" id="aliptica" value="aliptica">
                                                <label class="form-check-label" for="aliptica">Alípica</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input name="oleosidade" class="form-check-input" type="radio" id="lipidica" value="lipidica">
                                                <label class="form-check-label" for="lipidica">Lipídica</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input name="oleosidade" class="form-check-input" type="radio" id="normal" value="normal">
                                                <label class="form-check-label" for="normal">Normal</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input name="oleosidade" class="form-check-input" type="radio" id="seborreica" value="seborreica">
                                                <label class="form-check-label" for="seborreica">Seborreica</label>
                                            </div>


                                            <div class="col-md">
                                                <h5 class="card-header">Espessura da pele</h5>
                                                <div class="form-check form-check-inline mt-3">
                                                    <input name="espessura_pele" class="form-check-input" type="radio" id="espessa" value="espessa">
                                                    <label class="form-check-label" for="espessa">Espessa</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input name="espessura_pele" class="form-check-input" type="radio" id="fina" value="fina">
                                                    <label class="form-check-label" for="fina">Fina</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input name="espessura_pele" class="form-check-input" type="radio" id="muito_fina" value="muito fina">
                                                    <label class="form-check-label" for="muito_fina">Muito fina</label>
                                                </div>




                                                <div class="col-md">
                                                    <h5 class="card-header">Grau de acne</h5>
                                                    <div class="form-check form-check-inline mt-3">
                                                        <input name="grau_acne" class="form-check-input" type="radio" id="inlineCheckbox1" value="I">
                                                        <label class="form-check-label" for="inlineCheckbox1">I</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input name="grau_acne" class="form-check-input" type="radio" id="inlineCheckbox2" value="II">
                                                        <label class="form-check-label" for="inlineCheckbox2">II</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input name="grau_acne" class="form-check-input" type="radio" id="inlineCheckbox3" value="III">
                                                        <label class="form-check-label" for="inlineCheckbox3">III</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input name="grau_acne" class="form-check-input" type="radio" id="inlineCheckbox4" value="IV">
                                                        <label class="form-check-label" for="inlineCheckbox4">IV</label>
                                                    </div>


                                                    <div class="col-md">
                                                        <h5 class="card-header">Hidratação</h5>
                                                        <div class="form-check form-check-inline mt-3">
                                                            <input name="hidratacao_pele" class="form-check-input" type="radio" id="desidradata" value="desidradatada">
                                                            <label class="form-check-label" for="desidradata">Desidratada</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input name="hidratacao_pele" class="form-check-input" type="radio" id="normal" value="normal">
                                                            <label class="form-check-label" for="normal">Normal</label>
                                                        </div>




                                                        <div class="col-md">
                                                            <h5 class="card-header">Fototipo</h5>
                                                            <div class="form-check form-check-inline mt-3">
                                                                <input name="fototipo" class="form-check-input" type="radio" id="tipo1" value="I">
                                                                <label class="form-check-label" for="tipo1">I</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input name="fototipo" class="form-check-input" type="radio" id="tipo2" value="II">
                                                                <label class="form-check-label" for="tipo2">II</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input name="fototipo" class="form-check-input" type="radio" id="tipo3" value="III">
                                                                <label class="form-check-label" for="tipo3">III</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input name="fototipo" class="form-check-input" type="radio" id="tipo4" value="IV">
                                                                <label class="form-check-label" for="tipo4">IV</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input name="fototipo" class="form-check-input" type="radio" id="tipo5" value="V">
                                                                <label class="form-check-label" for="tipo5">V</label>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label class="form-label" for="basic-default-message">Possui manchas? Onde? </label>
                                                                <input name="manchas" type="text" class="form-control" id="basic-default-company">

                                                            </div>



                                                            <div>
                                                                <label for="exampleFormControlTextarea1" class="form-label">Orientações à paciente</label>
                                                                <textarea name="orientacoes" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                            </div>



                                                            <div class="mb-3">
                                                                <label for="exampleFormControlSelect1" class="form-label">Anamnese</label>
                                                                <select name='anamnese' class="form-select" id="exampleFormControlSelect1">

                                                                    <option value="inativo">Corporal</option>
                                                                    <option selected value="ativo">Facial</option> <!--  forçando ficar selecionado -->//


                                                                </select>
                                                            </div>

                                                            <button type="submit" name="btncadastrar" class="btn mb-3 btn-primary">cadastrar</button>
                                    </form>
                                    <?php
                                   if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                                    $clienteController = new ClienteController(new Cliente());
                                    
                                    if ($clienteController->armazenar()){
                                      echo 'SALVO COM SUCESSO   ';
                                    } else {
                                        echo ' ERRRRRRRRO';
                                    }
                                   } 


                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- / Content -->

                    <!-- Footer -->
                    <?php include_once '../../includes/footer.php'; ?>
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <?php include_once '../../includes/script.php'; ?>

    <!-- Core JS -->
</body>

</html>