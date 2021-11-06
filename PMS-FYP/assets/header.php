<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--Font Awesome CSS-->
    <link rel="stylesheet" href="css/all.min.css">
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu" rel="stylesheet">
    <!--Custom Css-->
    <link rel="stylesheet" href="css/custom.css">
    <title>Document</title>
</head>
<body >
    
    <!--Top Bar-->
    <nav class="navbar navbar-dark fixed-top p-0 shadow" style="background-color: #2e4450;">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="dashboard.php">GHAURI MEDICAL STORE</a>
    
    
    </nav>
    <!--Side Bar-->
    <div class="container-fluid mb-5" style="margin-top:40px">
        <div class="row">
            <nav class="col-sm-3 col-md-2 bg-light sidebar py-5 d-print-none">
                <div class="sidebar-sticky">
                    <div><img src="/img/logo1.PNG" class='img-circle' style='width: 200px;height: 150px'></div>
                    <ul class="nav flex-column" style="margin-top: 20px;">
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php">
                            <i class="fas fa-tachometer-alt fa-lg"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">
                            <i class="fas fa-house-user fa-lg"></i>
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="inventory.php">
                            <i class="fas fa-cubes fa-lg"></i>
                            Inventory
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="additem.php">
                            <i class="fas fa-plus-circle fa-lg"></i>
                            Add New Item
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="report.php">
                            <i class="fas fa-file-alt fa-lg"></i>
                            Report
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="account.php">
                            <i class="fas fa-user fa-lg"></i>
                            Account Setting
                        </a>
                    </li>
                    <li class="nav-item">
                        <!------ Logout php ------>
                        <?php
                        session_start();
                        if(isset($_SESSION['User']))
                        {
                        echo '<a class="nav-link" href="logout.php?logout">
                            <i class="fas fa-sign-out-alt fa-lg"></i>
                            Logout </a>';
                        }
                        else{
                            header("location:index.php");
                        }
                        ?>
                        
                    </li>

                </ul>
                </div>
            </nav>
