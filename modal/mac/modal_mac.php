<div class="modal fade" id="ModalUpdateMac" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    
                </div>
                <div class="modal-body">
                    <?php         
                        $id_mac=urldecode(base64_decode($_GET['idmac']));          
                        include "modal/mac/modal_mac_read.php";
                        
                    ?>
                    <form action="modal/mac/modal_mac_update.php" method="POST">
                        <label></label>
                       <input type="text" id="id" name="id" value="<?php echo $row_mac["id"]; ?>" hidden ><br>
                       <label>Hostname</label> 
                       <input type="text" id="hostname" name="hostname" value="<?php echo $row_mac["hostname"];?>"><br> 
                       <label>Adresse Mac</label>
                       <input type="text" id="macaddr" name="macaddr" value="<?php echo $row_mac["macaddr"]; ?>"><br> 
                        <button type="submit" class="btn btn-primary">Modifier</button>
                        <button class="btn btn-secondary" type="button" data-dismiss="modal" onclick="window.location.href = '/RadiusPanel/users.php'">Annuler</button>
                    </form>    
                    
                    <p>Modal update Mac</p>
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

                    <p>Modal add Mac</p>
                </div>
                
            </div>
        </div>
</div>


<div class="modal fade" id="ModalDeleteMac" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">      
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Vous voulez vraiment supprimer cet Adresse Mac??</h5>
                    
                </div>
                <div class="modal-body">
                <p>Modal delete Mac</p>
                <?php  $id_mac=urldecode(base64_decode($_GET['idmac']));  ?>           
                </div>
                <div class="modal-footer">
                <?php echo '<a href="modal/mac/modal_mac_delete.php?idmac='.urlencode(base64_encode($id_mac)).'" class="mr-3 modal-link" title="Delete Record" data-toggle="tooltip"><button class="btn btn-warning">Supprimer</button></a>'; ?>
                    <button class="btn btn-secondary" type="button" data-dismiss="modal" onclick="window.location.href = '/RadiusPanel/users.php'">Annuler</button>
                    <?php //echo '<a href="modal/user/modal_user_delete.php?id='.urlencode(base64_encode($id_user)).'&showModal=true" class="mr-3 modal-link" title="Delete Record" data-toggle="tooltip"><button class="btn btn-warning">Supprimer</button></a>'; ?>
                </div>
            </div>
        </div>
</div>
