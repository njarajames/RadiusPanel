<?php
                    // Include config file
                                        require_once "config.php";
                                        
                                        // Attempt select query execution
                                        $sql = "SELECT id,groupname,attribute,op,value FROM radgroupcheck";
                                        if($result = mysqli_query($conn, $sql)){
                                            if(mysqli_num_rows($result) > 0){
                                                echo '<table class="table table-bordered" id="dataTable4" width="100%" cellspacing="0">';
                                                    echo "<thead>";
                                                        echo "<tr>";
                                                            echo "<th>#</th>";
                                                            echo "<th>groupname</th>";
                                                            echo "<th>attribute</th>";
                                                            echo "<th>operator</th>";
                                                            echo "<th>value</th>";
                                                        echo "</tr>";
                                                    echo "</thead>";
                                                    echo "<tbody>";
                                                    while($row = mysqli_fetch_array($result)){
                                                        echo "<tr>";
                                                            echo "<td>" . $row['id'] . "</td>";
                                                            echo "<td>" . $row['groupname'] . "</td>";
                                                            echo "<td>" . $row['attribute'] . "</td>";
                                                            echo "<td>" . $row['op'] . "</td>";
                                                            echo "<td>" . $row['value'] . "</td>";
                                                            echo "<td class='text-center'>";
                                                               //echo '<a href="read.php?id='. $row['id'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><i class="fas fa-book-open"></i></a>';
                                                               ///echo '<a href="update.php?id='. $row['id'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><i class="fas fa-tools"></i></a>';
                                                               //echo '<a href="delete.php?id='. $row['id'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
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