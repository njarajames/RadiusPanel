<?php
                    // Include config file
                                        require_once "config.php";
                                        
                                        // Attempt select query execution
                                        $sql = "SELECT id,nasname,shortname,type,secret FROM nas";
                                        if($result = mysqli_query($conn, $sql)){
                                            if(mysqli_num_rows($result) > 0){
                                                echo '<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">';
                                                    echo "<thead>";
                                                        echo "<tr>";
                                                            echo "<th>#</th>";
                                                            echo "<th>IP NAS</th>";
                                                            echo "<th>Description</th>";
                                                            echo "<th>Type</th>";
                                                            echo "<th>Code Secret</th>";
                                                            echo "<th>Action</th>";
                                                        echo "</tr>";
                                                    echo "</thead>";
                                                    echo "<tbody>";
                                                    while($row = mysqli_fetch_array($result)){
                                                        echo "<tr>";
                                                            echo "<td>" . $row['id'] . "</td>";
                                                            echo "<td>" . $row['nasname'] . "</td>";
                                                            echo "<td>" . $row['shortname'] . "</td>";
                                                            echo "<td>" . $row['type'] . "</td>";
                                                            echo "<td>" . $row['secret'] . "</td>";
                                                            echo "<td class='text-center'>";
                                                                echo '<a href="nas.php?idnas='.urlencode(base64_encode($row['id'])).'&showModalUpdateNas=true" class="mr-3" title="Update Record" data-toggle="tooltip"><i class="fas fa-tools"></i></a>';
                                                                echo '<a href="nas.php?id_nas='.urlencode(base64_encode($row['id'])).'&showModalDelete=true" class="mr-3" title="Update Record" data-toggle="tooltip"><i class="fas fa-trash"></i></a>';
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