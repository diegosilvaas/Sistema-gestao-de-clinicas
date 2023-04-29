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
                            <a href="create.php" class="btn btn-success btn-sm" title="registrar conta a pagar"><i class="bx bx-plus-medical"></i></a>
                            REGISTRAR CONTA</h5>
                        <div class="table-responsive text-nowrap">
                            <table class="table table-dark">
                                <thead>
                                <tr>
                                    <th>Vencimento</th>
                                    <th>Cliente</th>
                                    <th>descricao</th>
                                    <th>Titulo</th>
                                    <th>Valor</th>
                                    <th>Pago</th>
                                    <th>Restante</th>
                                    <th>Status</th>

                                </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                <?php
                                $db = new PDO("mysql:dbname=sistemadeproduto;host=localhost", 'root', '');
                                $sql = 'select * from produto_estoque';
                                $stmt = $db->prepare($sql);
                                $stmt->execute();
                                $result = $stmt->fetchAll();
                                foreach ($result as $item){

                                ?>
                                <tr>

                                    <td><?php  echo $item['nome']?></td>
                                    <td><?php echo $item['descricao']?></td>
                                    <td><?= $item['quantidade'] ?>  </td>
                                    <td><?= $item ['valor']?></td>
                                    <td>
                                        <?php
                                        if ($item['status'] == 'ativo') {
                                            echo '<span class="badge bg-label-success me-1">Ativo</span>';
                                        } else {
                                            echo '<span class="badge bg-label-danger me-1">Inativo</span>';
                                        }
                                        ?>

                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Editar</a>
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
