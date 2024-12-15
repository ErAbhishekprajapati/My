<?php
require("studentsconnection.php")

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Form 2023</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Overall Form Style */
        body {
            background-color: #e5e8eb; /* Light grey background */
        }
        .container {
            max-width: 800px;
            margin-top: 20px;
            background-color: #f7fdfd; /* White background for the form */
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .text-center {
            font-size: 24px;
            font-weight: bold;
            color: #007bff; /* Blue color for the form title */
            margin-bottom: 20px;
            border-bottom: 2px solid #007bff;
            padding-bottom: 10px;
        }
        .form-group label {
            font-weight: bold;
            color: #495057; /* Dark grey for labels */
        }
        .form-control {
            border: 1px solid #ced4da; /* Light grey border */
            border-radius: 5px;
        }
        .form-control:focus {
            border-color: #007bff; /* Blue border on focus */
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.25);
        }
        .form-check-label {
            color: #6c757d; /* Grey for declaration text */
        }
        /* Custom Button Style */
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3; /* Darker blue on hover */
            border-color: #0056b3;
        }
        /* Photo and Signature Section */
        .photo-section img, .signature-section img {
            width: 100px;
            height: auto;
            display: block;
            margin-bottom: 5px;
            border: 1px solid #ddd;
            padding: 5px;
            border-radius: 5px;
        }
        /* Responsive Adjustments */
        @media (max-width: 576px) {
            .form-row .col-md-6 {
                margin-bottom: 15px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Admission Form 2024</h2>
        <form method="POST" enctype="multipart/form-data">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="fullName">Full Name</label>
                    <input type="text" class="form-control" id="fullName" name="full_name" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="fatherName">Father Name</label>
                    <input type="text" class="form-control" id="fatherName" name="father_name" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="motherName">Mother Name</label>
                    <input type="text" class="form-control" id="motherName" name="mother_name" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="dob">DOB</label>
                    <input type="date" class="form-control" id="dob" name="dob" required>
                </div>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <textarea class="form-control" id="address" name="address" rows="2" required></textarea>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="mobile">Mobile No</label>
                    <input type="text" class="form-control" id="mobile" name="mobile" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="category">Category</label>
                    <select type="text" class="form-control" id="category" name="category">
                        <option>OBC</option>
                        <option>General</option>
                        <option>SC/ST</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="gender">Gender</label>
                    <select class="form-control" id="gender" name="gender">
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="course">Course</label>
                    <select type="text" class="form-control" id="course" name="course" required>
                        <option>O Level</option>
                        <option>A Level</option>
                        <option>BCA</option>
                        <option>MCA</option>
                        <option>ADCA</option>
                        <option>CCC</option>
                    </select>

                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6 photo-section">
                    <label>Photo</label>
                    <img src="photo-placeholder.png" alt="Photo Preview">
                    <input type="file" class="form-control-file" name="photo" required>
                </div>
                <div class="form-group col-md-6 signature-section">
                    <label>Signature</label>
                    <img src="signature-placeholder.png" alt="Signature Preview">
                    <input type="file" class="form-control-file" name="signature" required>
                </div>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="declaration" name="declaration" required>
                <label class="form-check-label" for="declaration">
                    I declare that I have read and filled the above information, so if the information given by me is incorrect, you have the right to cancel without informing me.
                </label>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>
</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $full_name = $_POST['full_name'];
  $father_name = $_POST['father_name'];
  $mother_name = $_POST['mother_name'];
  $addresss = $_POST['address'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $dob = $_POST['dob'];
  $category = $_POST['category'];
  $gender = $_POST['gender'];
  $course = $_POST['course'];

  // Handle photo and signature file uploads
  $photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
  $signatures = addslashes(file_get_contents($_FILES['signature']['tmp_name']));

  // Insert into database
  $sql = "INSERT INTO students (full_name, father_name, mother_name,addresss, email, mobile, dob, category, gender, course, photo, signatures)
          VALUES ('$full_name', '$father_name', '$mother_name', '$addresss', '$email', '$mobile', '$dob', '$category', '$gender', '$course', '$photo', '$signatures')";
  
  $res = mysqli_query($conn, $sql);

if ($res) {
    echo "<script>alert('Submitted successfully');</script>";
} else {
    echo "<script>alert('Submission not successful');</script>";
    echo "Error: " . mysqli_error($conn); // Optional: Display error details for debugging
}


  // if ($conn->query($sql) === TRUE) {
  //     echo "Registration successful!";
  // } else {
  //     echo "Error: " . $sql . "<br>" . $conn->error;
  // }
//   if $res=mysqli_query($conn,$sql) {
//      echo"<script>alert('incorrect Password');</script>
//  }
//      else{
//   echo"<script>alert('incorrect Password');</script>";
//  }

}

$conn->close();
?>



    
 
