@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .contact-header {
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.6)), url('images/contact us.png');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 60px 20px;
        }
        .contact-header h1 {
            font-size: 2.5rem;
            font-weight: bold;
        }
        .form-container {
            background: #f8f9fa;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .icon-text {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 15px;
        }
        .icon-text img {
            width: 40px;
            height: 40px;
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <div class="contact-header">
        <!-- <h1>Contact Us</h1> -->
    </div>

    <!-- Main Content Section -->
    <div class="container my-5">
        <div class="row">
            <!-- Information Section -->
            <div class="col-md-6">
                <h2>Let’s Start a Conversation</h2>
                <p>Ask how we can help you:</p>
                <div class="icon-text">
                    <img src="images/girlsco2.jpg" alt="Platform Icon">
                    <div>
                        <strong>See our platform in action</strong><br>
                        Request a personalized demo, or sign up for a 30-day free trial of TUNE’s performance marketing platform.
                    </div>
                </div>
                <div class="icon-text">
                    <img src="images/girlsco1.jpg" alt="Marketing Icon">
                    <div>
                        <strong>Master performance marketing</strong><br>
                        From TUNE Academy courses to industry research and insights, learn everything you need to grow.
                    </div>
                </div>
            </div>

            <!-- Form Section -->
            <div class="col-md-6">
                <div class="form-container">
                <!-- Form Inside Modal -->
                <form action="https://formspree.io/f/mzzpwqwo" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Enter your full name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Courses</label>
                        <input type="text" id="email" name="text" class="form-control" placeholder="Enter your Favorite course" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" id="phone" name="phone" class="form-control" placeholder="Enter your phone number" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@include('layouts.footer')
@endsection