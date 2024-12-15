<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Teacher Detail</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .form-container {
      background-color: #19717C;
      color: white;
      padding: 20px;
      border-radius: 10px;
      margin-top: 30px;
    }
    .form-control {
      background-color: #f8f9fa;
      border: none;
    }
    .form-label {
      font-weight: bold;
      color: white;
    }
    .btn-submit {
      background-color: #4CAF50;
      color: white;
      border: none;
      padding: 10px 20px;
      cursor: pointer;
      transition: background-color 0.3s;
    }
    .btn-submit:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="form-container">
          <h3 class="text-center">Add Teacher Detail</h3>
          <form>
            <div class="row">
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="firstName" class="form-label">First Name</label>
                  <input type="text" class="form-control" id="firstName" placeholder="Enter Teacher's First Name" required>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" placeholder="Enter Teacher's Email"required>
                </div>
                <div class="mb-3">
                  <label for="department" class="form-label">Department</label>
                  <input type="text" class="form-control" id="department" placeholder="Enter Teacher's Department"required>
                </div>
                <div class="mb-3">
                  <label for="gender" class="form-label">Gender</label><br>
                  <input type="radio" id="male" name="gender" value="male">
                  <label for="male" class="form-label">Male</label>
                  <input type="radio" id="female" name="gender" value="female">
                  <label for="female" class="form-label">Female</label>
                </div>
                <div class="mb-3">
                  <label for="city" class="form-label">City</label>
                  <input type="text" class="form-control" id="city" placeholder="Enter City"required>
                </div>
                <div class="mb-3">
                  <label for="state" class="form-label">State</label>
                  <input type="text" class="form-control" id="state" placeholder="Enter State"required>
                </div>
              </div>

              <div class="col-md-6">
                <div class="mb-3">
                  <label for="lastName" class="form-label">Last Name</label>
                  <input type="text" class="form-control" id="lastName" placeholder="Enter Teacher's Last Name"required>
                </div>
                <div class="mb-3">
                  <label for="birthdate" class="form-label">Birthdate</label>
                  <input type="date" class="form-control" id="birthdate"required>
                </div>
                <div class="mb-3">
                  <label for="mobile" class="form-label">Mobile</label>
                  <input type="text" class="form-control" id="mobile" placeholder="Enter Mobile Number"required>
                </div>
                <div class="mb-3">
                  <label for="qualification" class="form-label">Qualification</label>
                  <input type="text" class="form-control" id="qualification" placeholder="Enter Qualification"required>
                </div>
                <div class="mb-3">
                  <label for="experience" class="form-label">Experience (Years)</label>
                  <input type="number" class="form-control" id="experience" placeholder="Enter Teaching Experience"required>
                </div>
                <div class="mb-3">
                  <label for="photo" class="form-label">Upload Photo</label>
                  <input type="file" class="form-control" id="photo"required>
                </div>
              </div>
            </div>
            <div class="text-center">
              <button type="submit" class="btn-submit">Add Detail</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
