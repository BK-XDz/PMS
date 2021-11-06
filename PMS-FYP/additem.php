<?php
include('./assets/header.php');
include('./assets/dbConnection.php');

if(isset($_REQUEST['itemSubmitBtn'])){
//Checking for Empty Field
 
     $name = $_REQUEST['name'];
     $unit = $_REQUEST['unit'];
     $pp_unit = $_REQUEST['pp_unit'];
     $supp_name = $_REQUEST['supp_name'];
     $mc_name = $_REQUEST['mc_name'];
     $description = $_REQUEST['description'];

 $sql = "INSERT INTO add_item (name,unit,pp_unit,supp_name,mc_name,description)
        VALUES ('$name', '$unit','$pp_unit','$supp_name','$mc_name','$description')";
         if($conn->query($sql)== TRUE){
            $msg = '<div class="alert alert-success col-mt-6 ml-5 mt-2 text-center">Product Added Successfully</div>';
         } else{
            $msg = '<div class="alert alert-danger col-mt-6 ml-5 mt-2 text-center">Unable to Add Product</div>';
         }
        }
?>

<div class="col-sm-6 mt-5 mx-3 formc">
    <h2 class="text-center formbtn" >Add New Product</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name" class="col-form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="unit" class="col-form-label">Unit</label>
            <input type="text" placeholder="e.g 10mg" class="form-control" id="unit" name="unit" required>
        </div>
        <div class="form-group">
            <label for="pp_unit" class="col-form-label">Price Per Unit</label>
            <input type="number"  class="form-control" id="pp_unit" name="pp_unit" required>
        </div>
        <div class="form-group">
            <label for="supp_name" class="col-form-label">Supplier Name</label>
            <input type="text" class="form-control" id="supp_name" name="supp_name" required>
        </div>
        <div class="form-group">
            <label for="mc_name" class="col-form-label">Medicine Company Name</label>
            <input type="text" class="form-control" id="mc_name" name="mc_name" required>
        </div>
        <div class="form-group">
            <label for="cat" class="col-form-label">Category</label>
            <select class="form-control" name="catID" required>
                <option >Please Select Category</option>
              
            </select>
        </div>
        <div class="form-group">
            <label for="description" class="col-form-label">Description</label>
            <input type="text" placeholder="Write Some Description" class="form-control" id="description" name="description">
        </div>
        <div class="text-center formbtn" >
            <button type="submit" class="btn btn-danger" id="itemSubmitBtn" name="itemSubmitBtn">Submit</button>
            <a href="inventory.php" class="btn btn-secondary">Close</a>
        </div>
        <?php if(isset($msg)) {echo $msg;} ?>
    </form>
</div>

<?php
include('./assets/footer.php');
?>