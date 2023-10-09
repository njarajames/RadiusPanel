<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">RadPan <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Tableau de Bord</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
                    aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Clients RADIUS </span>
                </a>
                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        
                        <a class="collapse-item active" href="users.php">Utilisateurs</a>
                        <a class="collapse-item" href="nas.php">NAS</a>
                        <a class="collapse-item" href="stat_cli.php">Statistiques Clients</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Groupe RADIUS</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="grp_radius.php">Groupe Clients</a>
                        <a class="collapse-item" href="stat_grp.php">Statistiques Groupes</a>
                    </div>
                </div>
            </li>

           

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Administrateur</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Options
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Suivi de Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Se Déconnecter
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="d-sm-flex align-items-center mb-4">
                    
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm ml-4" data-toggle="modal" data-target="#AddModal">
                            <i class="fas fa-plus fa-sm text-white-50"></i> Ajouter un utilisateur RADIUS</a>
                            
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm ml-4" data-toggle="modal" data-target="#AddMacModal">
                            <i class="fas fa-plus fa-sm text-white-50"></i> Ajouter une Adresse MAC </a>
                    </div>
                   
                    <div class="row">
                        <div class="col">
                            <div class="card shadow mx-4" >
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <?php include "tables/table_users.php" ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow mx-4" >
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <?php include "tables/table_macaddr.php"?>
                                    </div>
                                </div>
                            </div>
                        </div>                  
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Modal-->

    
<div class="modal fade" id="exampleModal1" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Ready to Leave?</h5>
                    
                </div>
                <div class="modal-body">
                    <?php         
                        $id_user=urldecode(base64_decode($_GET['id']));                    
                        include "modal/user/modal_user_read.php";
                    ?>
                    <form action="modal/user/modal_user_update.php" method="POST">
                       <input type="text" id="id"  name="id" value="<?php echo $row["id"]; ?>" readonly> 
                       <input type="text" id="username" name="username" value="<?php echo $row["username"]; ?>"> 
                       <input type="password" id="mdp" name="mdp" value="<?php echo $row["value"]; ?>"> 
                        <button type="submit" class="btn btn-primary">Modifier</button>
                        <button class="btn btn-secondary" type="button" data-dismiss="modal" onclick="window.location.href = '/RadiusPanel/users.php'">Annuler</button>
                    </form>    
                    
                    <p>Modal update user</p>
                </div>
                
            </div>
        </div>
</div>
   
<div class="modal fade" id="AddModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ajout d'un nouveau utilisateur</h5>
                   
                </div>
                <div class="modal-body">
                   
                    <form action="modal/user/modal_user_add.php" method="POST">
                       <label>Le nom d'utilisateur : </label> 
                       <input type="text" name="username" id="username" value=""><br> 
                       <label>Mot de passe : </label> 
                       <input type="password" name="mdp" id="mdp"value=""><br>  
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                        <button class="btn btn-secondary" type="button" data-dismiss="modal" onclick="window.location.href = '/RadiusPanel/users.php'">Annuler</button>
                    </form>    

                    <p>Modal add user</p>
                </div>
                
            </div>
        </div>
</div>

<div class="modal fade" id="AddMacModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ajout d'un nouveau Adresse Mac</h5>
                </div>
                <div class="modal-body">
                   
                    <form action="modal/mac/modal_mac_add.php" method="POST">
                       <label>Le Hostname : </label> 
                       <input type="text" name="hostname" id="hostname" value=""><br> 
                       <label>Adresse Mac : </label> 
                       <input type="text" name="macaddr" id="macaddr" value="" pattern="^([0-9A-Fa-f]{2}[:-]){5}([0-9A-Fa-f]{2})$" title="Veuillez entrer une adresse MAC valide au format xx:xx:xx:xx:xx:xx" required><br>  
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                        <button class="btn btn-secondary" type="button" data-dismiss="modal" onclick="window.location.href = '/RadiusPanel/users.php'">Annuler</button>
                    </form>    

                    <p>Modal add user</p>
                </div>
                
            </div>
        </div>
</div>

<div class="modal fade" id="ModalDeleteUser" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">      
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Vous voulez vraiment supprimer ??</h5>
                    
                </div>
                <div class="modal-body">
                    <?php         
                    $id_user=urldecode(base64_decode($_GET['id']));                    
                    include "modal/user/modal_user_read.php";
                    ?>           
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal" onclick="window.location.href = '/RadiusPanel/users.php'">Annuler</button>
                    <?php echo '<a href="modal/user/modal_user_delete.php?id='.urlencode(base64_encode($id_user)).'&showModal=true" class="mr-3 modal-link" title="Delete Record" data-toggle="tooltip"><button class="btn btn-warning">Supprimer</button></a>'; ?>
                </div>
            </div>
        </div>
</div>


                    

</body>

 <!-- Bootstrap core JavaScript-->
 <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/DataTb.js"></script>

    <!-- Votre lien avec la variable dans l'URL -->

<!-- Inclure SweetAlert -->

<script>
        document.addEventListener('DOMContentLoaded', function() {
            // Récupérer le paramètre showModal de l'URL
            const urlParams = new URLSearchParams(window.location.search);
            const showModal = urlParams.get('showModal');

            // Si le paramètre showModal est présent et égal à "true", afficher le modal
            if (showModal === 'true') {
                // Récupérer le modal par son ID et l'afficher
                const modal = document.getElementById('ModalDeleteUser');
                if (modal) {
                    $(modal).modal('show'); // Utilisation de jQuery pour afficher le modal
                }
            }
        });
</script>


<script>
        document.addEventListener('DOMContentLoaded', function() {
            // Récupérer le paramètre showModal de l'URL
            const urlParams = new URLSearchParams(window.location.search);
            const showModal = urlParams.get('showModal1');

            // Si le paramètre showModal est présent et égal à "true", afficher le modal
            if (showModal === 'true') {
                // Récupérer le modal par son ID et l'afficher
                const modal = document.getElementById('exampleModal1');
                if (modal) {
                    $(modal).modal('show'); // Utilisation de jQuery pour afficher le modal
                }
            }
        });
</script>

</html>