<div class="modal fade" id="ModalDeleteUser" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">      
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Vous voulez vraiment supprimer cet utilisateur ??</h5>
                    
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

<div class="modal fade" id="exampleModal1" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Ready </h5>
                    
                </div>
                <div class="modal-body">
                    <?php         
                       $id_user=urldecode(base64_decode($_GET['id']));                    
                        include "modal/user/modal_user_read.php";
                    ?>
                    <form action="modal/user/modal_user_update.php" method="POST">
                       <input type="text" id="id"  name="id" value="<?php echo $row["id"]; ?>" readonly hidden><br> 
                       <input type="text" id="username" name="username" value="<?php echo $row["username"]; ?>"><br> 
                       <input type="password" id="mdp" name="mdp" value="<?php echo $row["value"]; ?>"><br><br> 
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