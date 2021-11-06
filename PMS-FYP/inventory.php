<?php

include('./assets/header.php');
include('./assets/dbConnection.php')
?>

<div class="col-sm-9 mt-5">
                <p class="bg-dark text-white p-2 text-center">Inventory Report</p>
                <?php
                    $sql="SELECT * FROM add_item";
                    $result = $conn->query($sql);
                    if($result->num_rows>0){

                ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Unit(mg)</th>
                            <th scope="col">Price Per Unit</th>
                            <th scope="col">Supplier Name</th>
                            <th scope="col">Company</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php while($row = $result ->fetch_assoc()){     
                    echo '<tr> ';
                            
                    echo '<th scope="row">'.$row['id'].'</th>';
                    echo '<td>'.$row['name'].'</td>';
                    echo '<td>'.$row['unit'].'</td>';
                    echo '<td>'.$row['pp_unit'].'</td>';
                    echo '<td>'.$row['supp_name'].'</td>';
                    echo '<td>'.$row['mc_name'].'</td>';
                           echo' <td><button type="submit" class="btn btn-secondary" name="view" value="View"><i class="fas fa-eye"></i></button>
                           <form action="" method="POST" class="d-inline">
                           <input type="hidden" name="id" value='.$row["id"].'>
                                <button type="submit" class="btn btn-dark" name="delete" value="Delete"><i class="far fa-trash-alt"></i></button>
                                </form>
                                </td>
                        </tr>';
                        } ?>
                    </tbody>
                    </table>
                    <?php } 
                    else{
                        
                        echo "<h3 align=center>NO RESULT </h3>";
                    }

                    if(isset($_REQUEST['delete'])){
                        $sql="DELETE FROM add_item WHERE id={$_REQUEST['id']}";
                        if($conn->query($sql)==TRUE){
                            echo '<meta http-equiv="refresh" content="0;URL=?deleted"/>';
                        } else{
                            echo "Enable to Delete";
                        }
                    }
                    ?>
                </div>
                <div>
                    <a class="btn btn-danger box" href="additem.php"><i class="fas fa-plus fa-2x"></i></a>
                </div>


<?php
include('./assets/footer.php');
?>