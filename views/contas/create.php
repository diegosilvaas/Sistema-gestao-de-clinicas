<!DOCTYPE html>

<?php
//require_once '../../app/Model/Conection.php';
?>
<html
    lang="en"
    class="light-style layout-menu-fixed"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="assets/"
    data-template="vertical-menu-template-free"
>
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
            <div class="layout-container">
            <div class="col-12">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Cadastro de receber</h5>
                      <small class="text-muted float-end">Dados de cadastro</small>
                    </div>
                    <div class="card-body">
                      <form>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Cliente</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                              <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="Gabriela " aria-label="John Doe" aria-describedby="basic-icon-default-fullname2">
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Forma de pagamento</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-company2" class="input-group-text"><i class='bx bx-money'></i></i></span>
                              <input type="number" id="basic-icon-default-company" class="form-control" placeholder="PIX/ Dinheiro / Cartão" aria-label="ACME Inc." aria-describedby="basic-icon-default-company2">
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Emissão</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span class="input-group-text"><i class='bx bxs-calendar-heart'></i></span>
                              <input type="date" id="basic-icon-default-email" class="form-control" placeholder="10/01/2020" aria-label="john.doe" aria-describedby="basic-icon-default-email2">
                             
                            </div>
                            

                            
                            <div class="form-text">Dia que foi feito o procedimento</div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 form-label" for="basic-icon-default-phone">Valor total</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-phone2" class="input-group-text"><i class='bx bx-money'></i></span>
                              <input type="number"  id="basic-icon-default-phone" class="form-control phone-mask" placeholder="400,00" aria-label="658 799 8941" aria-describedby="basic-icon-default-phone2">
                            </div>
                          </div>

                          </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 form-label" for="basic-icon-default-phone">Valor falta</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-phone2" class="input-group-text"><i class='bx bx-money'></i></span>
                              <input type="number"  id="basic-icon-default-phone" class="form-control phone-mask" placeholder="100,00" aria-label="658 799 8941" aria-describedby="basic-icon-default-phone2">
                            </div>
                          </div>

                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 form-label" for="basic-icon-default-message">observação</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-message2" class="input-group-text"><i class="bx bx-comment"></i></span>
                              <textarea id="basic-icon-default-message" class="form-control" placeholder="cliente vai pagar o restante na próxima sessão" aria-label="Hi, Do you have a moment to talk Joe?" aria-describedby="basic-icon-default-message2"></textarea>
                            </div>
                          </div>
                        </div>
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">SALVAR</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                               <?php
                               if(isset($_POST['btncadastrar'])) {
                                   $name = $_POST['nome'];
                                   $description = $_POST['descricao'];
                                   $amount = $_POST['quantidade'];
                                   $value = $_POST['valor'];
                                   $status = $_POST['status'];


                                   $db = new PDO("mysql:dbname=sistemadeproduto;host=localhost", 'root', '');
                                   $sql = "insert into produto_estoque (nome, descricao, quantidade, valor, status) values ('$name', '$description', $amount, $value, '$status')";
                                   $stmt = $db->prepare($sql);

                                   if ($stmt->execute()) {
                                       echo 'Produto cadastrado com sucesso';

                                   } else {
                                       echo 'Erro ao cadastrar produto';
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