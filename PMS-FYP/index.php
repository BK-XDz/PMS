<?php
include('./assets/dbConnection.php');
?>

<!DOCTYPE html>
<html lang="en">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--Font Awesome CSS-->
    <link rel="stylesheet" href="css/all.min.css">
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu" rel="stylesheet">
    <!--Custom Css-->
    <link rel="stylesheet" href="css/custom.css">
<head>
    <title>Login</title>
</head>
<body style="background: url('img/log.jpg');background-size: 100%">

  <div class="container center">
    <div class="row">
        <div class="col-lg-4 m-auto">
            <div class="card bg-light mt-5">
                <div class="card-title bg-primary text-white mt-5">
                    <h3 class="text-center py-3">Gauri Medical Store</h3>
                </div>
                <!--Message--->
                <?php 
                        if(@$_GET['Empty']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Empty'] ?></div>                                
                    <?php
                        }
                    ?>


                    <?php 
                        if(@$_GET['Invalid']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Invalid'] ?></div>                                
                    <?php
                        }
                    ?>

                <div class="card-body formbtn">
                    <form action="login.php" method="post">
                        <input type="text" name="UName" placeholder=" User Name" class="form-control mb-4">
                        <input type="password" name="Password" placeholder=" Password" class="form-control mb-4">
                        <button class="btn btn-success" name="Login">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="position: fixed;;top:0;background: rgba(0,0,0,0.7); width: 100%;height: 100%;z-index: -1"></div>
<!--Popper JS-->
<script src="js/popper.min.js"></script>
<!--Bootstrap JS-->
<script src="js/bootstrap.min.js"></script>
<!--Font Awesome JS-->
<script src="js/all.min.js"></script>
</body>
</html>
<?php
if (isset($_POST['login'])) 
{
	$user = $_POST['email'];
    $pass = $_POST['password'];
    $con = new mysqli('localhost','root','','gms');

    $result = $conn->query("select * from users where email='$user' AND password='$pass'");
    if($result->num_rows>0)
    {	
    	session_start();
    	$data = $result->fetch_assoc();
    	$_SESSION['userId']=$data['id'];
      $_SESSION['bill'] = array();
    	header('location:dashboard.php');
      }
    else
    {
     	echo 
     	"<script>
     		\$(document).ready(function(){\$('#error').slideDown().html('Login Error! Try again.').delay(3000).fadeOut();});
     	</script>
     	";
    }
}

 ?>

