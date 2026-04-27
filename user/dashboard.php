<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Dashboard</title>
</head>

<body>
  <style>
    body {
      background: #0b0b0b;
      color: white;
      font-family: Arial;
    }

    /* Header */
    .header {
      padding: 20px;
    }

    /* MAIN GRID */
    .dashboard {
      display: grid;
      grid-template-columns: 2fr 1fr;
      gap: 20px;
      padding: 20px;
    }

    /* LEFT */
    .left {
      display: grid;
      gap: 20px;
    }

    /* RIGHT */
    .right {
      display: grid;
      gap: 20px;

    }

    /* CARDS */
    .card {
      background: #222222;
      padding: 20px;
      border-radius: 12px;
      line-height: 1.0;
      font-size: 1rem;
      font-family:'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }


    /* PROFILE */

    .profile p{
      font-size: 1rem;
      font-family: 'Times New Roman', Times, serif;
      color: #a5a3a3;
    }
 .info {
  display: grid;
  grid-template-columns: 1fr 1fr ;
  align-items: center;
  
}

.email {
  grid-column: 1;
}

.phone {
  grid-column: 2;
  text-align: center;
}


    /* MEMBERSHIP RED CARD */
    .membership {
      background: linear-gradient(to right, red, darkred);
    }

    /* BUTTONS */
    button {
      width: 100%;
      padding: 10px;
      margin-top: 10px;
      background: red;
      border: none;
      color: white;
      border-radius: 6px;
      cursor: pointer;
    }

    /* CLASS ITEMS */
    .class-item {
      background: black;
      padding: 10px;
      margin-top: 10px;
      border-radius: 6px;
    }
    .class-item p{
      font-size: 1rem;
      line-height: 0.5;
      color: #a5a3a3;
    }
  </style>
  <div class="dashboard-container">

    <!-- TOP -->
    <div class="header">
      <h1>Dashboard</h1>
      <p>Welcome back, John!</p>
    </div>

    <!-- GRID -->
    <div class="dashboard">

      <!-- LEFT SIDE -->
      <div class="left">

        <!-- Profile Card -->
        <div class="card profile">
          <h2>John Anderson</h2>
          <p>Member since Jan 15, 2024</p>
          <div class="info">
            <p>Email</p>
              <span>john@email.com</span>
            <p>Phone</p>
            <span>123456789</span>
          </div>
        </div>

        <!-- Membership -->
        <div class="card membership">
          <h3>Pro Annual</h3>
          <p>Start: Jan 15, 2024</p>
          <p>Expiry: Jan 14, 2025</p>
          <h1>280 Days</h1>
        </div>

        <!-- Payment -->
        <div class="card payment">
          <h4>Payment History</h4>
          <table>
            <tr>
              <th>Date</th>
              <th>Plan</th>
              <th>Amount</th>
            </tr>
            <tr>
              <td>2024</td>
              <td>Pro</td>
              <td>$599</td>
            </tr>
          </table>
        </div>

      </div>

      <!-- RIGHT SIDE -->
      <div class="right">

        <!-- Classes -->
        <div class="card classes">
          <h4>Upcoming Classes</h4>
          <div class="class-item">HIIT Training
            <p>Apr 10, 2026 at 6:00 AM</p>
            <p>with Marcus Steel</p>
          </div>
          <div class="class-item">Yoga Flow
            <p>Apr 12, 2026 at 7:30 AM</p>
            <p>with Sarah Chen</p>
          </div>
          <div class="class-item">CrossFit
            <p>Apr 14, 2026 at 5:00 PM</p>
            <p>with Alex Rodriguez</p>
          </div>
        </div>

        <!-- Actions -->
        <div class="card actions">
          <button>Renew Membership</button>
          <button>Book a Class</button>
          <button>Update Profile</button>
        </div>

      </div>

    </div>

  </div>
</body>

</html>