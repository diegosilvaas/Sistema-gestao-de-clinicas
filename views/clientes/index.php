<?php

require_once '../../app/Controller/ClienteController.php';
?>

<!DOCTYPE html>
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
                    <div class="card">

                    
                        <h5 class="card-header" >
                            <a href="create.php" class="btn btn-success btn-sm" title="cadastrar novo cliente"><i class="bx bx-plus-medical"></i></a>
                            Clientes cadastrados</h5>
                            
                            <div class="container-fluid">
                             <div class="row">
                                
                        <div class="table-responsive text-nowrap">
                            <table class="table table-dark">
                                <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Telefone</th>
                                    <th>Data de nascimento</th>
                                    <th>Anamnese</th>
                                    <th>Queixa Principal</th>
                                    <th>Ações</th>
                                </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                              



                                
                                <?php
                                $clienteController = new ClienteController();
                               
                                foreach ($clienteController->listarClientes() as $item){

                                ?>
                                <tr>

                                    <td><?php  echo $item['nome']?></td>
                                    <td><?php echo $item['telefone']?></td>
                                    <td><?= $item['data_nascimento'] ?>  </td>
                                    <td><?= $item ['anamnese']?></td>
                                    <td><?= $item ['queixa_principal']?></td>

                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a href="show.php?id_cliente=<?php  echo $item['id']?>"  class="dropdown-item" href="javascript:void(0);"><i class='bx bx-low-vision'></i> Visualizar</a>
                                                <a href="show.php?id_cliente=<?php  echo $item['id']?>" class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Editar</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Excluir</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                                }
                                ?>

                                </tbody>
                            </table>
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
