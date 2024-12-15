<?php 

session_start();
if(!isset($_SESSION['AdminLoginId'])){
	header("location: Admin.php");

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminPanel</title>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Management System</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
	<style>
		body{
			margin:0px;
		}
		div.header{
			align-items:center;
			font-family:poppins;
			display:flex;
			justify-content: space-between;
			padding:0px 60px;
			background-color:#221a91;

		}
		
    .dashboard-container {
      background-color: #221a91;
      color: white;
      padding: 20px;
      border-radius: 10px;
    }
    .dashboard-title {
      font-size: 24px;
      font-weight: bold;
    }
    .dashboard-card {
      padding: 20px;
      background-color: white;
      border-radius: 10px;
      color:#1fa18b;
      transition: 0.3s ease;
    }
    .dashboard-card:hover {
      background-color: #1fa18b;
      color: white;
    }
    .dashboard-icon {
      font-size: 40px;
      margin-bottom: 10px;
    }
	.m1{
		color:white;
		align-items:center;

	}
  

	</style>
</head>
<body>
	<div class="header">
	<h1 class="m1"> WELCOME TO ADMIN PANEL-<?php echo $_SESSION['AdminLoginId']?></h1>
	<form method="POST">
	<button name="Logout">LOG OUT</button>
	</form>
	</div>
	<?php 
	if(isset($_POST['Logout'])){
		session_destroy();
		header("location: Admin.php");
	}

	
	?>

</head>
<body>
  <div class="container-fluid">
    <div class="row vh-100">
      <!-- Sidebar
      <div class="col-md-3 bg-light pt-3">
        <h4 class="text-center">Manage Student</h4>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active text-dark" href="#">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#">Add Teacher Detail</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#">View Teacher Detail</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#">Edit Teacher Detail</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#">Add Student Detail</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#">View Student Detail</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#">Edit Student Detail</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#">Logout</a>
          </li>
        </ul>
      </div> -->

      <!-- Main Content -->
      <div class="col-md-13 p-5">
        <div class="dashboard-container">
          <h3 class="dashboard-title text-center">Student Management System</h3>
          <p class="text-center">Welcome to dashboard</p>
          <div class="row text-center">
            <div class="col-md-4 mb-3">
              <div class="dashboard-card">
                <div class="dashboard-icon">
                  <i class="bi bi-person-plus-fill"></i>
                </div>
                <a class="nav-link text-dark" href="Add_Students.php">Add Student Detail</a>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="dashboard-card">
                <div class="dashboard-icon">
                  <i class="bi bi-eye-fill"></i>
                </div>
                <a class="nav-link text-dark" href="#">View Student Detail</a>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="dashboard-card">
                <div class="dashboard-icon">
                  <i class="bi bi-pencil-fill"></i>
                </div>
                <a class="nav-link text-dark" href="#">Edit Student Detail</a>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="dashboard-card">
                <div class="dashboard-icon">
                  <i class="bi bi-person-plus-fill"></i>
                </div>
                <a class="nav-link text-dark" href="Add_teachers.php">Add Teachers Detail</a>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="dashboard-card">
                <div class="dashboard-icon">
                  <i class="bi bi-eye-fill"></i>
                </div>
                <a class="nav-link text-dark" href="#">View Teachers Detail</a>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="dashboard-card">
                <div class="dashboard-icon">
                  <i class="bi bi-pencil-fill"></i>
                </div>
                <a class="nav-link text-dark" href="#">Edit Teachers Detail</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>



</body>
</html>




