<?php
require("studentsconnection.php");  // Include the database connection file

// Flag to check final submission
$isFinalSubmit = isset($_POST['final_submit']) ? true : false;

if ($isFinalSubmit) {
    // Retrieve form data
    $fullName = $_POST['full_name'];
    $fatherName = $_POST['father_name'];
    $motherName = $_POST['mother_name'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $category = $_POST['category'];
    $gender = $_POST['gender'];
    $course = $_POST['course'];

    // Handle file upload
    $fileDestination = '';
    if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
        // Get the file info
        $fileTmpPath = $_FILES['file']['tmp_name'];
        $fileName = $_FILES['file']['name'];
        $fileSize = $_FILES['file']['size'];
        $fileType = $_FILES['file']['type'];
    
        // Define allowed file types
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
    
        // Check if the file is an allowed image type
        if (in_array($fileType, $allowedTypes)) {
            // Generate a new file name to prevent overwriting
            $newFileName = uniqid() . '-' . $fileName;
    
            // Move the uploaded file to the desired directory (e.g., "uploads/")
            $uploadDir = 'upload/';
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true); // Create the directory if it doesn't exist
            }
            $fileDestination = $uploadDir . $newFileName;
            move_uploaded_file($fileTmpPath, $fileDestination);
        } else {
            echo "<h3>Invalid file type. Please upload an image file.</h3>";
        }
    }

    // Insert data into the database, including the file path
    $sql = "INSERT INTO students (full_name, father_name, mother_name, dob, addresss, email, mobile, category, gender, course, photo) 
            VALUES ('$fullName', '$fatherName', '$motherName', '$dob', '$address', '$email', '$mobile', '$category', '$gender', '$course', '$fileDestination')";

    if (mysqli_query($conn, $sql)) {
        $message = "Data inserted successfully!";
    } else {
        $message = "Error: " . mysqli_error($conn);
    }
} else {
    // Assign values from the preview form if not the final submission
    $fullName = $_POST['full_name'];
    $fatherName = $_POST['father_name'];
    $motherName = $_POST['mother_name'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $category = $_POST['category'];
    $gender = $_POST['gender'];
    $course = $_POST['course'];
    $fileDestination = isset($_POST['photo']) ? $_POST['photo'] : '';  // Handle the photo path if available
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preview Admission Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 20px;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .photo-preview img {
            max-width: 150px;
            height: auto;
            border: 1px solid #ddd;
            padding: 5px;
            border-radius: 5px;
        }
        .text-center {
            font-size: 24px;
            font-weight: bold;
            color: #007bff;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Preview Admission Form</h2>

        <?php if (isset($message)) : ?>
            <div class="alert alert-info"><?= htmlspecialchars($message); ?></div>
        <?php endif; ?>

        <table class="table table-bordered">
            <tr>
                <th>Full Name</th>
                <td><?= htmlspecialchars($fullName) ?></td>
            </tr>
            <tr>
                <th>Father's Name</th>
                <td><?= htmlspecialchars($fatherName) ?></td>
            </tr>
            <tr>
                <th>Mother's Name</th>
                <td><?= htmlspecialchars($motherName) ?></td>
            </tr>
            <tr>
                <th>Date of Birth</th>
                <td><?= htmlspecialchars($dob) ?></td>
            </tr>
            <tr>
                <th>Address</th>
                <td><?= htmlspecialchars($address) ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?= htmlspecialchars($email) ?></td>
            </tr>
            <tr>
                <th>Mobile Number</th>
                <td><?= htmlspecialchars($mobile) ?></td>
            </tr>
            <tr>
                <th>Category</th>
                <td><?= htmlspecialchars($category) ?></td>
            </tr>
            <tr>
                <th>Gender</th>
                <td><?= htmlspecialchars($gender) ?></td>
            </tr>
            <tr>
                <th>Course</th>
                <td><?= htmlspecialchars($course) ?></td>
            </tr>
            <tr>
                <th>Photo</th>
                <td class="photo-preview">
                    <?php if ($fileDestination): ?>
                        <img src="<?= htmlspecialchars($fileDestination) ?>" alt="Uploaded Photo">
                    <?php else: ?>
                        No photo uploaded
                    <?php endif; ?>
                </td>
            </tr>
        </table>

        <div class="text-center">
            <a href="Add_Students.php" class="btn btn-secondary">Edit</a>
            <form method="POST" action="preview_page.php" enctype="multipart/form-data">
                <!-- Hidden fields to preserve data -->
                <input type="hidden" name="full_name" value="<?= htmlspecialchars($fullName) ?>">
                <input type="hidden" name="father_name" value="<?= htmlspecialchars($fatherName) ?>">
                <input type="hidden" name="mother_name" value="<?= htmlspecialchars($motherName) ?>">
                <input type="hidden" name="dob" value="<?= htmlspecialchars($dob) ?>">
                <input type="hidden" name="address" value="<?= htmlspecialchars($address) ?>">
                <input type="hidden" name="email" value="<?= htmlspecialchars($email) ?>">
                <input type="hidden" name="mobile" value="<?= htmlspecialchars($mobile) ?>">
                <input type="hidden" name="category" value="<?= htmlspecialchars($category) ?>">
                <input type="hidden" name="gender" value="<?= htmlspecialchars($gender) ?>">
                <input type="hidden" name="course" value="<?= htmlspecialchars($course) ?>">
                <input type="hidden" name="photo" value="<?= htmlspecialchars($fileDestination) ?>">
                <!-- Hidden input to indicate final submission -->
                <input type="hidden" name="final_submit" value="1">
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>