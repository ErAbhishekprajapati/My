<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
// Define variables and set to empty values
$nameError = $emailError = "";
$name = $email = $gender = $comment = $website = "";

// Process form when POST method is used
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate Name
    if (empty($_POST["name"])) {
        $nameError = "Name is mandatory";
    } else {
        $name = test_input($_POST["name"]);
        // Check if name contains only letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameError = "Only letters, hyphens, and whitespace are allowed";
        }
    }

    // Validate Email (Add email validation as an improvement)
    if (!empty($_POST["email"])) {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailError = "Invalid email format";
        }
    } else {
        $emailError = "Email is mandatory";
    }

    // Other fields (no additional validation applied here)
    $website = test_input($_POST["website"]);
    $comment = test_input($_POST["comment"]);
    $gender = test_input($_POST["gender"]);
}

// Sanitize input data
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <!-- Name Input -->
  Name: <input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>" required>
  <span style="color:red;"><?php echo $nameError; ?></span>
  <br><br>

  <!-- Email Input -->
  E-mail: <input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>" required>
  <span style="color:red;"><?php echo $emailError; ?></span>
  <br><br>

  <!-- Website Input -->
  Website: <input type="text" name="website" value="<?php echo htmlspecialchars($website); ?>">
  <br><br>

  <!-- Comment Textarea -->
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo htmlspecialchars($comment); ?></textarea>
  <br><br>

  <!-- Gender Radio Buttons -->
  Gender:
  <input type="radio" name="gender" value="female" <?php if ($gender == "female") echo "checked"; ?>>Female
  <input type="radio" name="gender" value="male" <?php if ($gender == "male") echo "checked"; ?>>Male
  <input type="radio" name="gender" value="other" <?php if ($gender == "other") echo "checked"; ?>>Other
  <br><br>

  <!-- Submit Button -->
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
// Display the sanitized user inputs after submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($nameError) && empty($emailError)) {
    echo "<h2>Your Input:</h2>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Website: " . $website . "<br>";
    echo "Comment: " . $comment . "<br>";
    echo "Gender: " . $gender . "<br>";
}
?>

</body>
</html>
