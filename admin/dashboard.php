<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">

    <title>Admin Dashboard</title>
</head>
<style>
    body {
        color: white;
        background-color: #000000;
    }
    .card-body {
        background-color: #202020;
        color: #fafafa;
    }
</style>

<body class="--bs-body-color-rgb">
    <?php include '../includes/header.php'; ?>
    <div class="main-heading">
        <h1> Admin Dashboard </h1>
        <p>Manage your gym operations and memberships </p>
    </div>
    <div class="buttons">
        <button type="button" class="btn btn-dark">Overview</button>
        <button type="button" class="btn btn-dark">Manage Users</button>
        <button type="button" class="btn btn-dark">Subscription Plans</button>
    </div>

    <section class="overview">
        <div class="row m-5">
            <div class="col-sm-3 mb-3 mb-sm-0">
                <div class="card">
                    <div class="card-body">
                        <i class="fa-solid fa-group"></i><span>+12.5%</span>
                        <h1>1,247</h1>
                        <p class="card-text">Total Users</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <i class="fa-solid fa-heart-rate"></i>
                        <h1>983</h1>
                        <p class="card-text">Active Memberships.</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <i class="fa-solid fa-dollar"></i>
                        <h1>$ 58,432</h1>
                        <p class="card-text">Monthly Revenue</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <i class="fa-solid fa-bullseye"></i>
                        <h1>23.8 %</h1>
                        <p class="card-text">Growth Rate</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="trends">
        <div class="row m-5">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <div class="card">
                    <div class="card-body">
                        
                        <p class="card-text">Trends</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        
                        <p class="card-text">Membership Distribution</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <?php include '../includes/footer.php'; ?>
</body>

</html>