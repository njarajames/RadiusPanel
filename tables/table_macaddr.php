<?php
                   
                                        require_once "config.php";
                                        
                                        // Attempt select query execution
                                        $sql = "SELECT id,hostname,macaddr FROM radmacauth";
                                        if($result = mysqli_query($conn, $sql)){
                                            if(mysqli_num_rows($result) > 0){
                                                echo '<table class="table table-bordered" id="dataTable2" width="100%" cellspacing="0">';
                                                    echo "<thead>";
                                                        echo "<tr>";
                                                            echo "<th>#</th>";
                                                            echo "<th>Hostname</th>";
                                                            echo "<th>Macaddr</th>";
                                                            echo "<th>Action</th>";
                                                        echo "</tr>";
                                                    echo "</thead>";
                                                    echo "<tbody>";
                                                    while($row = mysqli_fetch_array($result)){
                                                        echo "<tr>";
                                                            echo "<td>" . $row['id'] . "</td>";
                                                            echo "<td>" . $row['hostname'] . "</td>";
                                                            echo "<td>" . $row['macaddr'] . "</td>";
                                                            echo "<td>";
                                                                echo '<a href="users.php?idmac='.urlencode(base64_encode($row['id'])).'&showModalUpdateMac=true" class="mr-3 modal-link" title="Update Record" data-toggle="tooltip"><span class="fa fa-key"></span></a>';
                                                                echo '<a href="users.php?idmac='.urlencode(base64_encode($row['id'])).'&showModalDeleteMac=true" class="mr-3 modal-link" title="Delete Record" data-toggle="tooltip"><i class="fas fa-trash"></i></a>';
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
                                        mysqli_close($conn);
?>