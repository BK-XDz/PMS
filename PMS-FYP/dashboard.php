 
<?php
include('./assets/header.php');
include('./assets/dbConnection.php')


?>
            <!--Content-->
            <!--Cards-->
            <div class="col-sm-9 mt-5">
                <div class="row mx-5 text-center">

                    <div class="col-sm-4 mt-5">
                        <div class="card text-white bg-warning mb-3" style="max-width:18rem;">
                        <div class="card-header strong">Stock</div>
                        <div class="card-body">
                            <h4 class="card-title">
                                15
                            </h4>
                            <a class="btn text-white" href="#">View</a>
                        </div>
                        </div>
                    </div>

                    <div class="col-sm-4 mt-5">
                        <div class="card text-white bg-primary mb-3" style="max-width:18rem;">
                        <div class="card-header strong">Customer</div>
                        <div class="card-body">
                            <h4 class="card-title">
                                25
                            </h4>
                            <a class="btn text-white" href="#">View</a>
                        </div>
                        </div>
                    </div>

                    <div class="col-sm-4 mt-5">
                        <div class="card text-white bg-success mb-3" style="max-width:18rem;">
                        <div class="card-header strong">Sales</div>
                        <div class="card-body">
                            <h4 class="card-title">
                                5
                            </h4>
                            <a class="btn text-white" href="#">View</a>
                        </div>
                        </div>
                    </div>
                </div>
                <!--Table-->
                <div class="mx-5 mt-5 text-center">
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
                
            </div>
        </div>
    </div>


    
    <?php
include('./assets/footer.php');
?>