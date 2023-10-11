
<div class="modal fade" id="ModalUpdateNas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Update?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                       
                    </button>
                </div>
                <div class="modal-body">
                <?php         
                        $id_nas=urldecode(base64_decode($_GET["idnas"]));          
                        include "modal/nas/modal_nas_read.php";
                        echo "nb:"; echo  $id_nas;
                    ?>
                    <form action="modal/nas/modal_nas_update.php" method="POST">
                        <label></label>
                       <input type="text" id="id" name="id" value="<?php echo $row_nas["id"]; ?>" hidden><br>
                       <label>IP Nas</label> 
                       <input type="text" id="nasname" name="nasname" value="<?php echo $row_nas["nasname"];?>"><br> 
                       <label>Description du NAS</label>
                       <input type="text" id="shortname" name="shortname" value="<?php echo $row_nas["shortname"]; ?>"><br> 
                       <label>Code Secret partagé avec le NAS</label>
                       <input type="text" id="secret" name="secret" value="<?php echo $row_nas["secret"]; ?>"><br> 
                        <button type="submit" class="btn btn-primary">Modifier</button>
                        <button class="btn btn-secondary" type="button" data-dismiss="modal" onclick="window.location.href = '/RadiusPanel/nas.php'">Annuler</button>
                    </form>  
                </div>
                
            </div>
        </div>
</div>

<div class="modal fade" id="ModalDeleteNas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Delete?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">X</span>
                    </button>
                </div>
                <div class="modal-body">Voulez vous supprimer cet enregistrement</div>
                <div class="modal-footer">
                <?php echo '<a href="modal/nas/modal_nas_delete.php?id_nas='.urlencode(base64_encode($_GET['id_nas'])).'" class="mr-3 modal-link" title="Delete Record" data-toggle="tooltip"><button class="btn btn-warning">Supprimer</button></a>'; ?>
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
                    
                </div>
            </div>
        </div>
</div>

<div class="modal fade" id="ModalAddNas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">X</span>
                    </button>
                </div>
                <div class="modal-body" method="POST">
                    <h5 class="text-center">Ajouter d'un Client NAS ( équipement réseaux qui donnera accès aux  clients users ) </h5>
                    <form action="modal/nas/modal_nas_add.php" method="POST">
                        <label>IP du NAS</label>
                        <input type="text" id="ip_nas" name="ip_nas">
                        <br>
                        <label>Description du NAS</label>
                        <input type="text" id="descr_nas" name="descr_nas" >
                        <br>
                        <label>Code secret partagé avec le NAS</label>
                        <input type="text" id="mdp_nas" name="mdp_nas" >
                        <br>
                        <button type="submit">AJouter</button> 
                    </form>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
                    
                </div>
            </div>
        </div>
    </div>