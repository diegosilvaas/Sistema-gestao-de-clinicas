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

            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->
                <div class='container-xxl flex-grow-1 container-p-y'>
                   <div class="row">
                       <div class="card mb-4">
                           <div class="card-header d-flex justify-content-between align-items-center">
                               <h5 class="mb-0">Cadastrar nova conta</h5>
                               <small class="text-muted float-end">Default label</small>
                           </div>
                           <div class="card-body">
                               <form method="post">
                                   <div class="mb-3">
                                       <label class="form-label" for="basic-default-fullname">nome</label>
                                       <input name="nome" type="text" class="form-control" id="basic-default-fullname">
                                   </div>

                                   <div class="mb-3">
                                       <label class="form-label" for="basic-default-phone">descricao</label>
                                       <input name="descrição" type="text" id="basic-default-phone" class="form-control phone-mask" placeholder="coca 2 lts">
                                   </div>

                                   <div class="mb-3">
                                       <label class="form-label" for="basic-default-company">quantidade</label>
                                       <input name="quantidade" type="number" class="form-control" id="basic-default-company">
                                   </div>


                                   <div class="mb-3">
                                       <label class="form-label" for="basic-default-message">valor</label>
                                       <input name="valor" type="number" class="form-control" id="basic-default-company">

                                   </div>

                                   <div class="mb-3">
                                       <label for="exampleFormControlSelect1" class="form-label">status</label>
                                       <select name="status" class="form-select" id="exampleFormControlSelect1">

                                           <option value="inativo">inativo</option>
                                           <option selected value="ativo">ativo</option>  <!--  forçando ficar selecionado -->//


                                       </select>
                                   </div>

                                   <button type="submit" name="btncadastrar" class="btn btn-primary">cadastrar</button>
                               </form>
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