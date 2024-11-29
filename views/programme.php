<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="img/logo/logo.png" rel="icon">
    <title>Programme</title>
    <?php require_once('style.php') ?>
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        <?php require_once('aside.php') ?>
        <!-- Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- TopBar -->
                <?php require_once('navbar.php') ?>
                <!-- Topbar -->
                <!-- Container Fluid-->
                <div class="container-fluid" id="container-wrapper">
                    <div class="row">
                        <?php
                        if (isset($_GET["NewPro"])) {
                        ?>
                            <div class="col-lg-12">
                                <!-- Form Basic -->
                                <div class="card mb-4">
                                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-center">Ajouter un Programme</h6>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="row">
                                                <div class="form-group col-xl-6 col-lg-6 col-md-6  col-sm-6 p-3">
                                                    <label for="exampleInputEmail1">Jour</label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                                        placeholder="Ex: Lundi">
                                                </div>
                                                <div class="form-group col-xl-6 col-lg-6 col-md-6  col-sm-6 p-3">
                                                    <label for="select2SinglePlaceholder">Jour de la semaine</label>
                                                    <select class="select2-single-placeholder form-control" name="state" id="select2SinglePlaceholder">
                                                        <option value="">Exemple jour1</option>
                                                        <option value="Aceh">Exemple jour2</option>
                                                        <option value="Sumatra Utara">Exemple jour3</option>
                                                        <option value="Sumatra Barat">Exemple jour4</option>
                                                    </select>
                                                </div>                                                
                                                <div class="form-group col-xl-12 col-lg-12 col-md-12  col-sm-12 p-3">
                                                    <div class="row">
                                                        <div class="form-group col-xl-6 col-lg-6 col-md-6  col-sm-6 p-3">
                                                            <a href="programme.php" class="form-control btn btn-danger w-100">Annuler</a>
                                                        </div>
                                                        <div class="form-group col-xl-6 col-lg-6 col-md-6  col-sm-6 p-3">
                                                            <input type="submit" class="form-control btn btn-dark w-100" value="Enregistrer" name="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>


                            </div>
                        <?php
                        } else {
                        ?>
                            <div class="col-lg-12">
                                <!-- Form Basic -->
                                <div class="card mb-4">
                                    <a href="programme.php?NewPro" class="btn btn-dark w-100">Nouveau programme</a>
                                </div>
                            </div>
                        <?php
                        }
                        ?>


                        <!--Row-->
                    </div>
                    <!-- Row -->
                    <div class="row">
                        <!-- DataTable with Hover -->
                        <div class="col-lg-12">
                            <div class="card mb-4">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-dark">Liste des Horaires </h6>
                                </div>
                                <div class="table-responsive p-3">
                                    <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>#</th>
                                                <th>Jour & Categorie</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>N° 1</td>
                                                <td>Exemple catégorie</td>
                                                <td>
                                                    <a href="Form_film.php?modifier" class="btn btn-dark bi bi-pen-fill"></a>
                                                    <a href="" class="btn btn-danger bi bi-trash2-fill"></a>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Row-->

                </div>
                <!---Container Fluid-->
            </div>

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>copyright &copy; <script>
                                document.write(new Date().getFullYear());
                            </script> - developed by
                            <b><a href="https://indrijunanda.gitlab.io/" target="_blank">Eka_Consulting</a></b>
                        </span>
                    </div>
                </div>
            </footer>
            <!-- Footer -->
        </div>
    </div>

    <!-- Scroll to top -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <?php require_once('script.php') ?>

    <!-- Page level custom scripts -->
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable(); // ID From dataTable 
            $('#dataTableHover').DataTable(); // ID From dataTable with Hover
        });
    </script>

</body>

</html>