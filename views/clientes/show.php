<?php

require_once '../../app/Controller/ClienteController.php';
?>

<!DOCTYPE html>
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
                <?php
                $clienteController = new ClienteController();
                $dadosCliente = $clienteController->visualizarCliente($_GET['id_cliente']);

                ?>

                <div class="content-wrapper">
                    <!-- Content -->

                    <div class='container-xxl flex-grow-1 container-p-y'>
                        <div class="row">
                            <div class="card mb-4">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h5 class="mb-0">VISUALIZANDO DADOS DA CLIENTE</h5>
                                    <small class="text-muted float-end">Anamnese  <?php echo $dadosCliente->anamnese ?></small>
                                </div>

                                <!-- <form action="create.php" method="post">; -->
                                <div class="card-body">
                                    <form action="create.php" method="post">
                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Nome</label>
                                            <input value="<?php echo $dadosCliente->nome ?>" disabled name="nome" type="text" class="form-control" id="basic-default-fullname">
                                        </div>
                                    </form>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-phone">Data de nascimento</label>
                                        <input value="<?php echo $dadosCliente->data_nascimento ?>" disabled name="data_nascimento" type="date" id="basic-default-phone" class="form-control phone-mask" placeholder="06 02 1996">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-company">telefone</label>
                                        <input value="<?php echo $dadosCliente->telefone ?>" disabled name="telefone" type="number" class="form-control" id="basic-default-company">
                                    </div>


                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-message">Queixa principal</label>
                                        <input value="<?php echo $dadosCliente->queixa_principal ?>" disabled name="queixa_principal" type="text" class="form-control" id="basic-default-company">

                                    </div>



                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-message">Já realizou alguma cirurgia?</label>
                                        <input value="<?php echo $dadosCliente->realizou_cirurgia ?>" disabled name="realizou_cirurgia" type="text" class="form-control" id="basic-default-company">

                                    </div>



                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-message">Toma algum remédio? Qual?</label>
                                        <input value="<?php echo $dadosCliente->toma_remedio ?>" disabled name="toma_remedio" type="text" class="form-control" id="basic-default-company">

                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-message">Toma anticoncepcional?</label>
                                        <input value="<?php echo $dadosCliente->toma_anticoncepcional ?>" disabled name="toma_anticoncepcional" type="text" class="form-control" id="basic-default-company">

                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-message">Está fazendo algum tratamento médico?</label>
                                        <input value="<?php echo $dadosCliente->tratamento_medico ?>" disabled name="tratamento_medico" type="text" class="form-control" id="basic-default-company">

                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-message">Tem hipo/Hipertensão arterial?</label>
                                        <input value="<?php echo $dadosCliente->hipo_arterial ?>" disabled name="hipo_arterial" type="text" class="form-control" id="basic-default-company">

                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-message">Possui algum problema cardíaco?</label>
                                        <input value="<?php echo $dadosCliente->cardiaco ?>" disabled name="cardiaco" type="text" class="form-control" id="basic-default-company">

                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-message">Possui algum disturbio hormonal?</label>
                                        <input value="<?php echo $dadosCliente->disturbio_hormonal ?>" disabled name="disturbio_hormonal" type="text" class="form-control" id="basic-default-company">

                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-message">Possui algum disturbio circulatório?</label>
                                        <input value="<?php echo $dadosCliente->disturbio_circulatorio ?>" disabled name="disturbio_circulatorio" type="text" class="form-control" id="basic-default-company">

                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-message">Possui alguma doença de pele?</label>
                                        <input value="<?php echo $dadosCliente->doenca_pele ?>" disabled name="doenca_pele" type="text" class="form-control" id="basic-default-company">

                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-message">Ingere álcool? Com que frequência?</label>
                                        <input value="<?php echo $dadosCliente->ingere_alcool ?>" disabled name="ingere_alcool" type="text" class="form-control" id="basic-default-company">

                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-message">Diabetes?</label>
                                        <input value="<?php echo $dadosCliente->diabetes ?>" disabled name="diabetes" type="text" class="form-control" id="basic-default-company">

                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-message">Gostaria de mencionar algum quadro de saude?</label>
                                        <input value="<?php echo $dadosCliente->quadro_saude ?>" disabled name="quadro_saude" type="text" class="form-control" id="basic-default-company">

                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-message">Está gestante?</label>
                                        <input value="<?php echo $dadosCliente->gestante ?>" disabled name="gestante" type="text" class="form-control" id="basic-default-company">

                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-message">Pratica atividade fisica? Qual?</label>
                                        <input value="<?php echo $dadosCliente->atividade_fisica ?>" disabled name="atividade_fisica" type="text" class="form-control" id="basic-default-company">

                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-message">Alimentação balanceada?</label>
                                        <input value="<?php echo $dadosCliente->alimentacao_balanceada ?>" disabled name="alimentacao_balanceada" type="text" class="form-control" id="basic-default-company">

                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-message">Ingestão diária de água?</label>
                                        <input value="<?php echo $dadosCliente->ingestao_agua ?>" disabled name="ingestao_agua" type="text" class="form-control" id="basic-default-company">

                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-message">Funcionamento intestinal? </label>
                                        <input value="<?php echo $dadosCliente->funcionamento_intestinal ?>" disabled name="funcionamento_intestinal" type="text" class="form-control" id="basic-default-company">

                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-message">Ciclo mestrual?</label>
                                        <input value="<?php echo $dadosCliente->ciclo_mestrual ?>" disabled name="ciclo_mestrual" type="text" class="form-control" id="basic-default-company">

                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-message">Possui marcapasso?</label>
                                        <input value="<?php echo $dadosCliente->possui_marcapasso ?>" disabled name="possui_marcapasso" type="text" class="form-control" id="basic-default-company">

                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-message">Possui varizes?</label>
                                        <input value="<?php echo $dadosCliente->possui_varizes ?>" disabled name="possui_varizes" type="text" class="form-control" id="basic-default-company">

                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-message">Usa algum cosmético corporal/facial?</label>
                                        <input value="<?php echo $dadosCliente->cosmetico_corporal ?>" disabled name="cosmetico_corporal" type="text" class="form-control" id="basic-default-company">

                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-message">Histórico de epilepsia?</label>
                                        <input value="<?php echo $dadosCliente->epilepsia ?>" disabled name="epilepsia" type="text" class="form-control" id="basic-default-company">

                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-message">Cicatriz?</label>
                                        <input value="<?php echo $dadosCliente->cicatriz ?>" disabled name="cicatriz" type="text" class="form-control" id="basic-default-company">

                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-message">Já engravidou? Quantas vezes?</label>
                                        <input value="<?php echo $dadosCliente->engravidou ?>" disabled name="engravidou" type="text" class="form-control" id="basic-default-company">

                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-message">Possui alguma protese metálica? </label>
                                        <input value="<?php echo $dadosCliente->protese_metalica ?>" disabled name="protese_metalica" type="text" class="form-control" id="basic-default-company">

                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-message">É fumante? </label>
                                        <input value="<?php echo $dadosCliente->fumante ?>" disabled name="fumante" type="text" class="form-control" id="basic-default-company">

                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-message">Já teve câncer? </label>
                                        <input value="<?php echo $dadosCliente->cancer ?>" disabled name="cancer" type="text" class="form-control" id="basic-default-company">

                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-message">Utiliza lentes de contato? </label>
                                        <input value="<?php echo $dadosCliente->lente_contato ?>" disabled name="lente_contato" type="text" class="form-control" id="basic-default-company">

                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-message">Fica exposta ao sol? </label>
                                        <input value="<?php echo $dadosCliente->exposicao_sol ?>" disabled name="exposicao_sol" type="text" class="form-control" id="basic-default-company">

                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-message">Utiliza filtro solar? </label>
                                        <input value="<?php echo $dadosCliente->filtro_solar ?>" disabled name="filtro_solar" type="text" class="form-control" id="basic-default-company">

                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-message">Está no período mestrual? </label>
                                        <input value="<?php echo $dadosCliente->periodo_mestrual ?>" disabled name="periodo_mestrual" type="text" class="form-control" id="basic-default-company">

                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-message">Horas de sono </label>
                                        <input value="<?php echo $dadosCliente->sono ?>" disabled name="sono" type="text" class="form-control" id="basic-default-company">

                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-message">Oleosidade da pele </label>
                                        <input value="<?php echo $dadosCliente->oleosidade ?>" disabled name="oleosidade" type="text" class="form-control" id="basic-default-company">

                                    </div>



                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-message">Espessura da pele </label>
                                        <input value="<?php echo $dadosCliente->espessura_pele ?>" disabled name="espessura_pele" type="text" class="form-control" id="basic-default-company">

                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-message">Grau da acne </label>
                                        <input value="GRAU <?php echo $dadosCliente->grau_acne ?>" disabled name="grau_acne" type="text" class="form-control" id="basic-default-company">

                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-message">Hidratação da pele </label>
                                        <input value=" <?php echo $dadosCliente->hidratacao_pele ?>" disabled name="hidratacao_pele" type="text" class="form-control" id="basic-default-company">

                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-message">Fototipo </label>
                                        <input value="FOTOTIPO <?php echo $dadosCliente->fototipo ?>" disabled name="fototipo" type="text" class="form-control" id="basic-default-company">

                                    </div>





                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-message">Possui manchas? Onde? </label>
                                        <input value="<?php echo $dadosCliente->manchas ?>" disabled name="manchas" type="text" class="form-control" id="basic-default-company">

                                    </div>

                                    



                                    <div>
                                    
                                        <label for="exampleFormControlTextarea1" class="form-label">Orientações à paciente</label>
                                        <input value="<?php echo $dadosCliente->orientacoes ?>" disabled  name="orientacoes" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        
                                        
                                    </div>



                            

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-message">Anamnese </label>
                                        <input value="anamnese <?php echo $dadosCliente->anamnese ?>" disabled name="anamnese" type="text" class="form-control" id="basic-default-company">

                                    </div>

                                    <form>
                                        <input type="button" class="btn mb-3 btn-primary" value="Voltar" onClick="JavaScript: window.history.back();">
                                    </form>



                                    <?php include_once '../../includes/footer.php'; ?>

                                    <div class="layout-overlay layout-menu-toggle"></div>
                                </div>

                                <?php include_once '../../includes/script.php'; ?>

                                <!-- Core JS -->
</body>

</html>