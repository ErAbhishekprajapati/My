<?php
// Step 1: Connection to the database
require("studentsconnection.php");

// Initialize variables
$row=null;
$error='';
$successMessage = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['studentId']) && !empty($_POST['studentId'])) {
        // Fetch Student ID from user input
        $id = $_POST['studentId'];

        // Validate input
        if (isset($_POST['update'])) {
            // Step 2: Capture updated data
            $name = $_POST['studentName'];
            $fatherName = $_POST['fatherName'];
            $motherName = $_POST['motherName'];
            $email = $_POST['studentEmail'];
            $phone = $_POST['studentPhone'];
            $dob = $_POST['dob'];
            $category = $_POST['category'];
            $gender = $_POST['gender'];
            $course = $_POST['course'];
            $address = $_POST['address'];

            // Step 3: Update data in the database
            $sql = "UPDATE students SET full_name = ?, father_name = ?, mother_name = ?, email = ?, mobile = ?, dob = ?, category = ?, gender = ?, course = ?, addresss = ? WHERE id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssssssssssi", $name, $fatherName, $motherName, $email, $phone, $dob, $category, $gender, $course, $address, $id);

            if ($stmt->execute()) {
                $successMessage = "Student details updated successfully.";
            } else {
                $error = "There was an error updating the details.";
            }
        } else {
            // Step 4: Fetch the data when the form is first loaded or student ID is entered
            $sql = "SELECT * FROM students WHERE id = ?";
            $stmt = $conn->prepare($sql); // Prepared statement to prevent SQL injection
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
            } else {
                $error = "No data found for the given Student ID.";
            }
        }
    } else {
        $error = "Please enter a valid Student ID.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Update Student Details</h2>

        <!-- Search Form -->
        <form method="post" class="mb-4">
            <div class="input-group">
                <input type="number" name="studentId" class="form-control" placeholder="Enter Student ID" required>
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </form>

        <?php if (!empty($error)): ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>

        <?php if (!empty($successMessage)): ?>
            <div class="alert alert-success"><?php echo $successMessage; ?></div>
        <?php endif; ?>

        <?php if ($row): ?>
            <!-- Display Student Details -->
            <div class="card">
                <div class="card-header bg-primary text-white text-center">
                    <h3>Student Details</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="">
                        <input type="hidden" name="studentId" value="<?php echo $row['id']; ?>">

                        <div class="mb-3">
                            <label for="studentName" class="form-label">Name</label>
                            <input type="text" class="form-control" id="studentName" name="studentName" 
                                   value="<?php echo $row['full_name']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="fatherName" class="form-label">Father's Name</label>
                            <input type="text" class="form-control" id="fatherName" name="fatherName" 
                                   value="<?php echo $row['father_name']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="motherName" class="form-label">Mother's Name</label>
                            <input type="text" class="form-control" id="motherName" name="motherName" 
                                   value="<?php echo $row['mother_name']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="studentEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="studentEmail" name="studentEmail" 
                                   value="<?php echo $row['email']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="studentPhone" class="form-label">Phone</label>
                            <input type="tel" class="form-control" id="studentPhone" name="studentPhone" 
                                   value="<?php echo $row['mobile']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="dob" class="form-label">Date of Birth</label>
                            <input type="text" class="form-control" id="dob" name="dob" 
                                   value="<?php echo $row['dob']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <input type="text" class="form-control" id="category" name="category" 
                                   value="<?php echo $row['category']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="gender" class="form-label">Gender</label>
                            <input type="text" class="form-control" id="gender" name="gender" 
                                   value="<?php echo $row['gender']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="course" class="form-label">Course</label>
                            <input type="text" class="form-control" id="course" name="course" 
                                   value="<?php echo $row['course']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Student's Address</label>
                            <input type="text" class="form-control" id="address" name="address" 
                                   value="<?php echo $row['addresss']; ?>" required>
                        </div>

                        <!-- Display Image -->
                        <div class="mb-3">
                            <label for="photo" class="form-label">Photo</label>
                            <?php if (!empty($row['photo'])): ?>
                                <div>
                                    <img src="<?php echo $row['photo']; ?>" alt="Student Photo" class="img-fluid" width="150px">
                                </div>
                            <?php else: ?>
                                <p>No photo available.</p>
                            <?php endif; ?>
                        </div>

                        <div class="text-center">
                            <button type="submit" name="update" class="btn btn-success">Update</button>
                            <a class="btn btn-success" href="Admin_page.php">Go to Admin</a>
                        </div>
                    </form>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
