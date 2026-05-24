<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="User dashboard for gym membership management system">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/style.css">
  <title>User Dashboard | FitTrack Gym Management</title>
  <style>
    * {
      font-family: 'Poppins', sans-serif;
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }


   
  </style>
</head>

<body>
  <?php include '../includes/header.php'; ?>
  <div class="user-dashboard-heading">
    <h1>Dashboard</h1>
    <p>
      Welcome back,
      <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : 'User'; ?>!
    </p>
  </div>
  <section class="user-dashboard">
    <div class="dashboard-layout">
      <!-- Left Section -->
      <div class="left-section">
        <!-- Profile Card -->
        <div class="profile-card">
          <div class="profile-details">
            <i class="bi bi-person-circle icon" ></i>
            <span class="username">
              <h1><?php echo isset($_SESSION['username']) ? $_SESSION['username'] : 'User'; ?></h1>
              <p>Member since <?php echo isset($_SESSION['member_since']) ? $_SESSION['member_since'] : 'Unknown'; ?></p>
            </span>
          </div>
          <div class="contact-details">
            <div class="email">
              <p> Email </p> <?php echo isset($_SESSION['email']) ? $_SESSION['email'] : 'user@gmail.com'; ?>
            </div>
            <div class="phone">
              <p> Phone </p>
              <?php echo isset($_SESSION['phone']) ? $_SESSION['phone'] : '+91- 0000000000'; ?>
            </div>
          </div>
        </div>
        <!-- Membership Card -->
        <div class="membership-card">
          <div class="membership-card-details">
            <div class="active-membership-text">
              <h1>Active Membership</h1>
            </div>
            <div class="membership-type">
              <h1>Pro Annual</h1>
            </div>
            <div class="calender">
              <div class="start-date">
                <p>
                  <i class="bi bi-calendar calender-icon"></i> Start Date
                </p>
                <p class="time-period"> January 1, 2024</p>
              </div>
              <div class="expiry-date">
                <p><i class="bi bi-calendar calender-icon"></i> Expiry Date
                </p>
                <p class="time-period"> December 31, 2024</p>
              </div>
            </div>
            <div class="remains-days">
              <p>
                <i class="bi bi-clock clock-icon"></i>
                Days Remaining
              </p>
              <h2>30 </h2>
            </div>
          </div>
        </div>
        <!-- Payment History Card -->
        <div class="payment-card">
          <div class="payment-history">
            <i class="bi bi-credit-card"></i>
            <span class="payment-title">Payment History</span>
          </div>
          <div class="payment-table">
            <table class="table table-dark table-striped">
              <thead>
                <tr>
                  <th scope="col">DATE</th>
                  <th scope="col">PLAN</th>
                  <th scope="col">AMOUNT</th>
                  <th scope="col">STATUS</th>
                  <th scope="col">INVOICE</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>January 15, 2024</td>
                  <td class="plan">Pro Annual</td>
                  <td>$99.99</td>
                  <td><span class="badge bg-success">Completed</span></td>
                  <td> <a href="../assets/invoices/invoice-2024-001.pdf"
                      class="invoice-link" download>

                      <i class="bi bi-download"></i>

                      INV-2024-001

                    </a></td>
                </tr>
                <tr>
                  <td>April 1, 2024</td>
                  <td class="plan">Pro Annual</td>
                  <td>$99.99</td>
                  <td><span class="badge bg-success">Completed</span></td>
                  <td> <a href="../assets/invoices/invoice-2024-002.pdf" class="invoice-link" download>
                      <i class="bi bi-download"></i>
                      INV-2024-002
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>March 1, 2024 </td>
                  <td class="plan">Pro Annual</td>
                  <td>$99.99</td>
                  <td> <i class="bi bi-check-circle-fill bg-success">Completed</i></td>
                  <td><a href="../assets/invoices/invoice-2024-003.pdf"
                      class="invoice-link" download>

                      <i class="bi bi-download"></i>

                      INV-2024-003

                    </a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- Right Section -->
      <div class="right-section">
        <!-- Upcoming Classes Card -->
        <div class="upcoming-class-card">
          <div class="upcoming-class-heading">
            <h1>Upcoming Classes</h1>
            <hr>
          </div>
          <div class="cards">
            <div class="card">
              <h6>HIIT Training</h6>
              <p>Monday, 6:00 PM - 7:00 PM</p>
              <p> with John Doe</p>
            </div>
            <div class="card">
              <h6>Yoga Class</h6>
              <p>Monday, 6:00 PM - 7:00 PM</p>
              <p> with John Doe</p>
            </div>
            <div class="card">
              <h6>CrossFit Class</h6>
              <p>Monday, 6:00 PM - 7:00 PM</p>
              <p> with John Doe</p>
            </div>
          </div>
        </div>
        <!-- Quick Actions Card -->
        <div class="quick-action-card">
          <h6>Quick Actions</h6>
          <div class="button-container">
            <button class="btn  w-100 mb-2 renew-btn">Renew Membership</button>
            <button class="btn btn-secondary w-100 mb-2 book-btn">Book a Class</button>
            <button class="btn btn-secondary w-100 mb-2 update-btn">Update Profile</button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> <?php include '../includes/footer.php'; ?>
</body>

</html>