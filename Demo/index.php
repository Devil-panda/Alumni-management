<?php include_once "header.php";?>
<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>
  <body>
    <div class="container">
      <aside>
        <div class="top">
          <div class="logo">
            <img src="./images/logo1.jpeg" alt="Logo" /> <!-- Enter your logo-->
            <h2>Hex<span class="danger">Tech</span></h2>
          </div>
          <div class="close" id="close-btn">
            <span class="material-icons-sharp"> close </span>
          </div>
        </div>

        <div class="sidebar">
        <a href="index.php" class="active">
            <span class="material-icons-sharp"> home </span>
            <h3>Home</h3>
          </a>
          <a href="update.php" class="active">
            <span class="material-icons-sharp"> person_outline </span>
            <h3>Updates Details</h3>
          </a>
          <a href="Event.php">
            <span class="material-icons-sharp"> receipt_long </span>
            <h3>Event</h3>
          </a>
          <a href="Gallery.html">
            <span class="material-icons-sharp"> photo </span>
            <h3>Gallery</h3>
          </a>
          <a href="chatapp_demo/index_1.php">
            <span class="material-icons-sharp"> chat </span>
            <h3>Chat</h3>
            <!--<span class="message-count">26</span>-->
          </a>
          <!-- <a href="Report.html">
            <span class="material-icons-sharp"> inventory </span>
            <h3>Report</h3>
          </a> -->
          <!-- <a href="Settings.html">
            <span class="material-icons-sharp"> settings </span>
            <h3>Settings</h3>
          </a> -->
          <a href="logout-user.php">
            <span class="material-icons-sharp"> logout </span>
            <h3>Logout</h3>
          </a>
        </div>
      </aside>

      <main>
        <h1>Alumni Dashboard</h1>

        <div class="date">
          <input type="date" />
        </div>

        <div class="insights">
          <!-- SALES -->
          <div class="sales">
            <span class="material-icons-sharp"> analytics </span>
            <!--<div class="middle">
              <div class="left">
                <h3>Total Sales</h3>
                <h1>$25,024</h1>
              </div>
              <div class="progress">
                <svg>
                  <circle cx="38" cy="38" r="36"></circle>
                </svg>
                <div class="number">
                  <p>81%</p>
                </div>
              </div>
            </div>
            <small class="text-muted"> Last 24 hours </small> -->
            <div>We are a comprehensive group of companies who aims is to simplify the networking of the alumni once they are out of their colleges. 
This also helps in developing a sense of respect and trust among different colleges. With our comprehensive website the goal is to have a
simple yet effective webiste that is accessible and uderstandable to each and every alumni of all 26 aided and 7 goverment colleges.
</div>
          </div>

          <!-- EXPENSES -->
          <div class="expenses">
            <span class="material-icons-sharp"> bar_chart </span>
            <!--<div class="middle">
              <div class="left">
                <h3>Total Expenses</h3>
                <h1>$14,160</h1>
              </div>
              <div class="progress">
                <svg>
                  <circle cx="38" cy="38" r="36"></circle>
                </svg>
                <div class="number">
                  <p>62%</p>
                </div>
              </div>
            </div>
            <small class="text-muted"> Last 24 hours </small>-->
            <div>Our mission is to help create a network of all the alumnies that graduated our colleges. This Stronghold of network will help in better
the opporunities for our alumni network. The network in itself is worth a great deal. The mission here is to create a strong ad comprehensive family.</div>
          </div>

          <!-- INCOME -->
          <div class="income">
            <span class="material-icons-sharp"> stacked_line_chart </span>
            <!--<div class="middle">
              <div class="left">
                <h3>Total Income</h3>
                <h1>$10,864</h1>
              </div>
              <div class="progress">
                <svg>
                  <circle cx="38" cy="38" r="36"></circle>
                </svg>
                <div class="number">
                  <p>44%</p>
                </div>
              </div>
            </div>
            <small class="text-muted"> Last 24 hours </small>
          </div>-->
          <div>Our vision is to have a network so strong that looking for a job will be as easy as going to the supermarket to buy groceries. All the things in one place
and a 100% genuine. The vision is to also grow the webisite as such so that all the users or alumni have a platform to interect,
socialize and grow.</div>
        </div>

        <div class="recent-orders">
          <!--<h2>Recent Orders</h2>
          <table id="recent-orders--table">
            <thead>
              <tr>
                <th>Product Name</th>
                <th>Product Number</th>
                <th>Payment</th>
                <th>Status</th>
                <th></th>
              </tr>
            </thead> -->
            <!-- Add tbody here | JS insertion -->
          <!--</table>
          <a href="#">Show All</a>
        </div>-->
        <!-- <div>Our vision is to have a network so strong that looking for a job will be as easy as going to the supermarket to buy groceries. All the things in one place
and a 100% genuine. The vision is to also grow the webisite as such so that all the users or alumni have a platform to interect,
socialize and grow.</div> -->
      </main>

      <div class="right">
        <div class="top">
          <button id="menu-btn">
            <span class="material-icons-sharp"> menu </span>
          </button>
          <div class="theme-toggler">
            <!-- <span class="material-icons-sharp active"> light_mode </span>
            <span class="material-icons-sharp"> dark_mode </span> -->
            <span class="material-icons-sharp active "> dark_mode </span>
            <span class="material-icons-sharp"> light_mode </span>
          </div>
          <div class="profile">
            <div class="info">
              <p>Hey, <b>Alumni</b></p>
              <small class="text-muted">User</small>
            </div>
            <div class="profile-photo">
              <img src="./images/profile-1.jpg" alt="Profile Picture" />
            </div>
          </div>
        </div>
        <div class="insights">
          <main>
        <div class="recent-updates">
          <h2>NewsLetter</h2>
          <!-- Add updates div here | JS insertion -->
        </div>

        <!--<div class="sales-analytics">
          <h2>Sales Analytics</h2>
          <div id="analytics">-->
            <!-- Add items div here | JS insertion -->
          <!--</div>
          <div class="item add-product">
            <div>
              <span class="material-icons-sharp"> add </span>
              <h3>Add Product</h3>
            </div>
          </div>-->

          <div class="recent-orders">
          <!--<h2>Recent Orders</h2>
          <table id="recent-orders--table">
            <thead>
              <tr>
                <th>Product Name</th>
                <th>Product Number</th>
                <th>Payment</th>
                <th>Status</th>
                <th></th>
              </tr>
            </thead> -->
            <!-- Add tbody here | JS insertion -->
          <!--</table>
          <a href="#">Show All</a>
        </div>-->
        <div>Very enthusiastic event Technicia 2023 will be held on 2 and 3 March by Amity University. </div>
        </div>
        </main>
        </div>
      </div>
    </div>

    <script src="./constants/recent-order-data.js"></script>
    <script src="./constants/update-data.js"></script>
    <script src="./constants/sales-analytics-data.js"></script>
    <script src="./index.js"></script>
  </body>
</html>