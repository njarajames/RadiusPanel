<?php
                    // Include config file
                                        require_once "config.php";
                                        
                                        // Attempt select query execution
                                        $sql = "SELECT id,username,value FROM radcheck";
                                        if($result = mysqli_query($conn, $sql)){
                                            if(mysqli_num_rows($result) > 0){
                                                echo '<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">';
                                                    echo "<thead>";
                                                        echo "<tr>";
                                                            echo "<th>#</th>";
                                                            echo "<th>username</th>";   
                                                            echo "<th>Mot de Passe</th>";
                                                            echo "<th>Action</th>";
                                                        echo "</tr>";
                                                    echo "</thead>";
                                                    echo "<tbody>";
                                                    while($row = mysqli_fetch_array($result)){
                                                        $data_id=$row['id'];
                                                        $data_username=$row['username'];
                                                        $data_value=$row['value'];
                                                        echo "<tr>";
                                                            echo "<td>" . $row['id'] . "</td>";
                                                            echo "<td>" . $row['username'] . "</td>";
                                                            echo "<td>" . $row['value'] . "</td>";
                                                            echo "<td class='text-center'>";   
                                                                echo '<a href="users.php?id='.urlencode(base64_encode($data_id)).'&showModal1=true" class="mr-3 modal-link" title="Delete Record" data-toggle="tooltip"><span class="fa fa-key"></span></a>';
                                                                echo '<a href="users.php?id='.urlencode(base64_encode($data_id)).'&showModal=true" class="mr-3 modal-link" title="Update Record" data-toggle="tooltip"><i class="fas fa-trash"></i></a>';
                                                            echo "</td>";
                                                        echo "</tr>";
                                                    }
                                                    echo "</tbody>";                            
                                                echo "</table>";
                                                // Free result set
                                                mysqli_free_result($result);
                                            } else{
                                                echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                                            }
                                        } else{
                                            echo "Oops! Something went wrong. Please try again later.";
                                        }
                    
                                        // Close connection
                                       
?>

