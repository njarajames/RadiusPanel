<?php
                    // Include config file
                                        require_once "config.php";
                                        
                                        // Attempt select query execution
                                        $sql = "SELECT Group_Name,Type FROM radgroup WHERE Type LIKE '%NAS_Client%'";
                                        if($result = mysqli_query($conn, $sql)){
                                            if(mysqli_num_rows($result) > 0){
                                                echo '<table class="table table-bordered" id="dataTable2" width="100%" cellspacing="0">';
                                                    echo "<thead>";
                                                        echo "<tr>";
                                                            echo "<th>Group_User_Name</th>";                                  
                                                            echo "<th>Type</th>";
                                                            echo "<th>Action</th>";
                                                        echo "</tr>";
                                                    echo "</thead>";
                                                    echo "<tbody>";
                                                    while($row = mysqli_fetch_array($result)){
                                                        echo "<tr>";                                                           
                                                            echo "<td>" . $row['Group_Name'] . "</td>";
                                                            echo "<td>" . $row['Type'] . "</td>";
                                                            echo "<td class='text-center'>";
                                                                echo '<a href="read.php?id='. $row['Group_Name'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><i class="fas fa-book-open"></i></a>';
                                                                echo '<a href="update.php?id='. $row['Group_Name'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><i class="fas fa-tools"></i></a>';
                                                                echo '<a href="delete.php?id='. $row['Group_Name'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
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
                    
                                       
?>

