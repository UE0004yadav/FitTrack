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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Admin Dashboard</title>
</head>
<style>
 /* admin dashboard */
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, sans-serif;
}

body{
    background:#000;
    color:white;
    padding:40px;
}

/* Header */

.dashboard-header h1{
    font-size:52px;
    margin-bottom:10px;
}

.dashboard-header p{
    color:#a0a0a0;
    margin-bottom:35px;
}

/* Buttons */

.dashboard-buttons{
    display:flex;
    gap:18px;
    flex-wrap:wrap;
    margin-bottom:40px;
}

.dashboard-btn{
    background:#1e1e1f;
    color:white;
    border:none;
    padding:16px 28px;
    border-radius:14px;
    font-size:17px;
    cursor:pointer;
    transition:0.3s;
}

.dashboard-btn.active{
    background:#ff0505;
}

/* Content */

.tab-content{
    display:none;
}

.tab-content.active{
    display:block;
}

/* Cards */

.card-container{
    display:flex;
    gap:25px;
    flex-wrap:wrap;
}

.card{
    background:#111116;
    border:1px solid #222;
    border-radius:18px;
    padding:30px;
    width:300px;
}

.card-icon{
    width:60px;
    height:60px;
    border-radius:14px;
    display:flex;
    justify-content:center;
    align-items:center;
    font-size:22px;
    margin-bottom:20px;
}

.blue{
    background:#16213e;
    color:#3b82f6;
}

.green{
    background:#0f2b1d;
    color:#00ff84;
}

.red{
    background:#2f1212;
    color:#ff0505;
}

.card h2{
    font-size:42px;
    margin-bottom:10px;
}

.card p{
    color:#a0a0a0;
}

/* Top Section */

.top-section{
    display:flex;
    justify-content:space-between;
    align-items:center;
    gap:20px;
    margin-bottom:30px;
    flex-wrap:wrap;
}

/* Search Box */

.search-box{
    width:400px;
    background:#111116;
    border:1px solid #222;
    border-radius:14px;
    padding:15px 20px;
    display:flex;
    align-items:center;
    gap:12px;
}

.search-box input{
    width:100%;
    background:none;
    border:none;
    outline:none;
    color:white;
    font-size:16px;
}

.search-box i{
    color:#8b8b8b;
}

/* Buttons */

.add-user-btn,
.create-plan-btn{
    background:#ff0505;
    color:white;
    border:none;
    padding:15px 28px;
    border-radius:14px;
    cursor:pointer;
    transition:0.3s;
}

.add-user-btn:hover,
.create-plan-btn:hover{
    background:#d90404;
}

/* Tables */

.table-container{
    background:#111116;
    border:1px solid #222;
    border-radius:18px;
    overflow:hidden;
}

table{
    width:100%;
    border-collapse:collapse;
}

thead{
    background:#000;
}

thead th{
    text-align:left;
    padding:22px;
    color:#a0a0a0;
    font-size:14px;
}

tbody td{
    padding:24px 22px;
    border-top:1px solid #1f1f24;
}

/* Status */

.status{
    padding:7px 15px;
    border-radius:50px;
    font-size:14px;
}

.active-status{
    background:rgba(0,255,132,0.12);
    color:#00ff84;
    border:1px solid #00ff84;
}

/* Price */

.price{
    color:#00ff84;
    font-weight:bold;
}

/* Responsive */

@media(max-width:992px){

    body{
        padding:20px;
    }

    .card{
        width:100%;
    }

    .search-box{
        width:100%;
    }

    table{
        min-width:700px;
    }

    .table-container{
        overflow-x:auto;
    }

}       
    
</style>

<body >
    <?php include '../includes/header.php'; ?>
<?php

/* Database Connection */

$conn = mysqli_connect("localhost", "root", "", "gym_db",3307);

/* Check Connection */

if(!$conn){
    die("Connection Failed");
}

/* ========================= */
/* TOTAL USERS */
/* ========================= */

$userQuery = "SELECT COUNT(*) AS total_users FROM users";

$userResult = mysqli_query($conn, $userQuery);

$userData = mysqli_fetch_assoc($userResult);

$totalUsers = $userData['total_users'];

/* ========================= */
/* ACTIVE MEMBERSHIPS */
/* ========================= */

$membershipQuery = "
SELECT COUNT(*) AS active_memberships 
FROM users
";

$membershipResult = mysqli_query($conn, $membershipQuery);

$membershipData = mysqli_fetch_assoc($membershipResult);

$activeMemberships = $membershipData['active_memberships'];

/* ========================= */
/* TOTAL REVENUE */
/* ========================= */

$totalRevenue = 0;

?>
  <div class="dashboard-header">

        <h1>Admin Dashboard</h1>

        <p>
            Manage your gym operations and memberships
        </p>

    </div>

    <!-- ========================= -->
    <!-- BUTTONS -->
    <!-- ========================= -->

    <div class="dashboard-buttons">

        <button class="dashboard-btn active"
        data-tab="overview">

            Overview

        </button>

        <button class="dashboard-btn"
        data-tab="users">

            Manage Users

        </button>

        <button class="dashboard-btn"
        data-tab="plans">

            Subscription Plans

        </button>

    </div>

    <!-- ========================= -->
    <!-- OVERVIEW SECTION -->
    <!-- ========================= -->

    <div class="tab-content active"
    id="overview">

        <div class="card-container">

            <!-- TOTAL USERS -->

            <div class="card">

                <div class="card-icon blue">

                    <i class="fa-solid fa-users"></i>

                </div>

                <h2>

                    <?php echo $totalUsers; ?>

                </h2>

                <p>Total Users</p>

            </div>

            <!-- ACTIVE MEMBERSHIPS -->

            <div class="card">

                <div class="card-icon green">

                    <i class="fa-solid fa-wave-square"></i>

                </div>

                <h2>

                    <?php echo $activeMemberships; ?>

                </h2>

                <p>Active Memberships</p>

            </div>

            <!-- TOTAL REVENUE -->

            <div class="card">

                <div class="card-icon red">

                    <i class="fa-solid fa-dollar-sign"></i>

                </div>

                <h2>

                    $<?php echo $totalRevenue; ?>

                </h2>

                <p>Monthly Revenue</p>

            </div>
            <div class="card">

                <div class="card-icon purple">

                    <i class="fa-solid fa-chart-line"></i>

                </div>

                <h2>

                    <?php echo $totalUsers; ?>

                </h2>

                <p>Growth Rate</p>

            </div>

        </div>

    </div>

    <!-- ========================= -->
    <!-- USERS SECTION -->
    <!-- ========================= -->

    <div class="tab-content"
    id="users">

        <!-- TOP SECTION -->

        <div class="top-section">

            <!-- SEARCH BOX -->

            <div class="search-box">

                <i class="fa-solid fa-magnifying-glass"></i>

                <input type="text"
                placeholder="Search users...">

            </div>

            <!-- ADD USER BUTTON -->

            <button class="add-user-btn">

                Add User

            </button>

        </div>

        <!-- USERS TABLE -->

        <div class="table-container">

            <table>

                <thead>

                    <tr>

                        <th>USER</th>

                        <th>EMAIL</th>

                        <th>MEMBERSHIP</th>

                        <th>STATUS</th>

                    </tr>

                </thead>

                <tbody>

                    <?php

                    $userTableQuery = "SELECT * FROM users";

                    $userTableResult = mysqli_query($conn, $userTableQuery);

                    while($row = mysqli_fetch_assoc($userTableResult)){

                    ?>

                    <tr>

                        <td>

                            <?php echo $row['name']; ?>

                        </td>

                        <td>

                            <?php echo $row['email']; ?>

                        </td>

                        <td>

                            Basic Plan

                        </td>

                        <td>

                            <span class="status active-status">

                                Basic Plan

                            </span>

                        </td>

                    </tr>

                    <?php } ?>

                </tbody>

            </table>

        </div>

    </div>

    <!-- ========================= -->
    <!-- SUBSCRIPTION PLANS -->
    <!-- ========================= -->

    <div class="tab-content"
    id="plans">

        <div class="plan-top">

            <button class="create-plan-btn">

                Create New Plan

            </button>

        </div>

        <!-- PLANS TABLE -->

        <div class="table-container">

            <table>

                <thead>

                    <tr>

                        <th>PLAN NAME</th>

                        <th>PRICE</th>

                    </tr>

                </thead>

                <tbody>

                    <?php

                    $planQuery = "SELECT * FROM plans";

                    $planResult = mysqli_query($conn, $planQuery);

                    while($plan = mysqli_fetch_assoc($planResult)){

                    ?>

                    <tr>

                        <td>

                            <?php echo $plan['plan_name']; ?>

                        </td>

                        <td class="price">

                            $<?php echo $plan['price']; ?>

                        </td>

                    </tr>

                    <?php } ?>

                </tbody>

            </table>

        </div>

    </div>
    
        <!-- JavaScript -->

    <script src="../assets/js/script.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <?php include '../includes/footer.php'; ?>
</body>

</html>