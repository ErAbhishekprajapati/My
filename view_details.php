<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Student Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow-lg">
            <div class="card-header text-center bg-primary text-white">
                <h3>View Student Details</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                    <!-- Student ID -->
                    <div class="mb-3">
                        <label for="studentId" class="form-label">Student ID</label>
                        <input type="text" name="studentId" class="form-control" id="studentId" placeholder="Enter Student ID" required>
                    </div>
                    
                    <!-- Name -->
                    <div class="mb-3">
                        <label for="studentName" class="form-label">Name</label>
                        <input type="text" name="studentName" class="form-control" id="studentName" placeholder="Enter Student Name" required>
                    </div>
                    
                    <!-- Email -->
                    <div class="mb-3">
                        <label for="studentEmail" class="form-label">Email</label>
                        <input type="email" name="studentEmail" class="form-control" id="studentEmail" placeholder="Enter Email Address" required>
                    </div>
                    
                    <!-- Phone -->
                    <div class="mb-3">
                        <label for="studentPhone" class="form-label">Phone Number</label>
                        <input type="tel" name="studentPhone" class="form-control" id="studentPhone" placeholder="Enter Phone Number" required>
                    </div>
                    
                    <!-- Department -->
                    <div class="mb-3">
                        <label for="studentDepartment" class="form-label">Department</label>
                        <select name="studentDepartment" class="form-select" id="studentDepartment" required>
                            <option value="">Select Department</option>
                            <option value="Computer Science">Computer Science</option>
                            <option value="Information Technology">Information Technology</option>
                            <option value="Electronics">Electronics</option>
                            <option value="Mechanical">Mechanical</option>
                        </select>
                    </div>
                    
                    <!-- Address -->
                    <div class="mb-3">
                        <label for="studentAddress" class="form-label">Address</label>
                        <textarea name="studentAddress" class="form-control" id="studentAddress" rows="3" placeholder="Enter Address" required></textarea>
                    </div>
                    
                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">View Details</button>
                        <button type="reset" class="btn btn-secondary">Clear</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Display Submitted Data -->
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $studentId = htmlspecialchars($_POST['studentId']);
            $studentName = htmlspecialchars($_POST['studentName']);
            $studentEmail = htmlspecialchars($_POST['studentEmail']);
            $studentPhone = htmlspecialchars($_POST['studentPhone']);
            $studentDepartment = htmlspecialchars($_POST['studentDepartment']);
            $studentAddress = htmlspecialchars($_POST['studentAddress']);
            
            echo "<div class='card mt-5'>
                    <div class='card-header bg-success text-white'>
                        <h4>Student Details</h4>
                    </div>
                    <div class='card-body'>
                        <p><strong>Student ID:</strong> $studentId</p>
                        <p><strong>Name:</strong> $studentName</p>
                        <p><strong>Email:</strong> $studentEmail</p>
                        <p><strong>Phone:</strong> $studentPhone</p>
                        <p><strong>Department:</strong> $studentDepartment</p>
                        <p><strong>Address:</strong> $studentAddress</p>
                    </div>
                  </div>";
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>




<!-- 
database se data ko ek form ke roop me display krna  -->


<?php
// Step 1: Database Connection
$servername = "localhost"; // Change if not localhost
$username = "root";        // Your database username
$password = "";            // Your database password
$database = "student_db";  // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 2: Fetch Data from Database
$studentId = 1; // Example student ID. You can use dynamic IDs from user input.
$sql = "SELECT * FROM students WHERE id = $studentId";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetch the row
    $row = $result->fetch_assoc();
} else {
    echo "No data found for the given student ID.";
    $row = null;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data in HTML Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header text-center bg-primary text-white">
                <h3>Student Details</h3>
            </div>
            <div class="card-body">
                <form>
                    <!-- Displaying Data in Input Fields -->
                    <div class="mb-3">
                        <label for="studentId" class="form-label">Student ID</label>
                        <input type="text" class="form-control" id="studentId" name="studentId" 
                               value="<?php echo $row['id'] ?? ''; ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="studentName" class="form-label">Name</label>
                        <input type="text" class="form-control" id="studentName" name="studentName" 
                               value="<?php echo $row['name'] ?? ''; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="studentEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="studentEmail" name="studentEmail" 
                               value="<?php echo $row['email'] ?? ''; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="studentPhone" class="form-label">Phone</label>
                        <input type="tel" class="form-control" id="studentPhone" name="studentPhone" 
                               value="<?php echo $row['phone'] ?? ''; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="studentAddress" class="form-label">Address</label>
                        <textarea class="form-control" id="studentAddress" name="studentAddress" rows="3"><?php echo $row['address'] ?? ''; ?></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Update</button>
                        <button type="reset" class="btn btn-secondary">Clear</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
